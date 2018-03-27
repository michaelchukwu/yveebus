<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Location;
use App\Trip;
use DB;
use Auth;
use App\Promo;
use App\Wallet;
class BusController extends Controller
{
    public function searchBus(Request $request){

        // validating the entries
        $this->validate($request, [
            'from' => 'required',
            'to' => 'required|different:from'
        ]);

        $input = $request->all();
            // dd($input['from']);
        $data = DB::table('routes')
        ->where('from', $input['from'])
        ->where('to', $input['to'])
        ->where('active', 1)
        ->get();
        $location = Location::get();
        //
        $trips = Trip::where('user_id', Auth::user()->id)
                        ->latest()->limit(3)->get();
        // return response()->json(array('routes'=>$routes), 200);
        return view('buses.search', compact('data', 'location', 'trips'));
    }
    public function bookBus(Request $request)
    {
        // get all the info from booking
        $input = $request->all();
        $wallet = new WalletController();
        // check the wallet balance
        $walletbalance = Wallet::where('user_id',Auth::user()->id)->pluck('amount');
        if($walletbalance->count() == 0){
            return redirect()->route('wallet')->with('error', 'Please create and fund your wallet');
        }
        // dd($walletbalance[0]);
        // consider promo code
        $amount2debit = $input['amount']; 
        if($input['promo_code'] != null){
            $promoDeets = Promo::where('code', $input['promo_code'])->get();
            // dd($promoDeets);
            // if($promoDeets-{
            //     
            // }
            if($promoDeets->count() > 0){


                foreach($promoDeets as $promodeet){
                        $promo_id = $promodeet->id;
                        $promo_amount = $promodeet->amount;
                        $promo_type = $promodeet->type;
                        $promo_description = $promodeet->description;
                        if($promo_type == 'discount'){
                            $amount2debit = $input['amount'] - (float)$promo_amount;
                        }else{
                            $amount2debit = $input['amount'];
                            $wallet->add($paymentDetails['data']['amount'] = (int)$promo_amount*100);
                        }
                }
            }else{
                return redirect()->back()->with('error', 'This Promo code does not exist');
            }
        }
        
        // debit the wallet
        if($amount2debit > (int)$walletbalance[0]){
            return redirect()->back()->with('error', 'You do not have sufficient balance');
        }
        $wallet->use($amount2debit);
        // create a payment
        $payment = new PaymentController();
        $paymentdone = $payment->recordCharge($amount2debit);
        // create a trip
        $trip = new Trip();
        $trip->user_id = Auth::user()->id;
        $trip->driver_id = 2;
        //return payment id;
        $trip->payment_id = $paymentdone;
        $trip->route_id = $input['route_id'];
        $trip->bus_id = $input['bus_id'];
        $trip->code = $this->generateTicketCode();
        $trip->completed = 0;
        $trip->save();
        // record promo use
        if($input['promo_code'] != null){
            //promo use
            DB::table('promo_use')->insert(
                ['promo_id'=>$promo_id,'trip_id'=>$trip->id,'user_id'=>Auth::user()->id]
            );
        }
        // claim a seat...
        // $nextFreeSeat = DB::table('seats')
        //         ->where('bus_id', $input['bus_id'])
        //         ->where('free', 0)->first();
        // DB::table('seats')
        //         ->where('id', $nextFreeSeat->id)
        //         ->update(['free'=> 1]);
        // A seat at tis point is taken... we shall return
        // return a ticket and estimated time of bus arrival
        $trip->time = Route::where('id', $trip->route_id)->first()->time;
        // send the time for a countdown
        return view('buses.booked', compact('trip'));
        
    }
    public function showBus($id)
    {   
        $route = Route::find($id);
        return view('buses.show', compact('route'));
    }

    //generate the ticket code
    function generateTicketCode(){
    $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $su = strlen($an) - 1;
    return substr($an, rand(0, $su), 1).
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1);
    }

    // check if seats on a bus are free
    public function checkFreeSeat($bus_id)
    {
        return DB::table('seats')
                ->where('bus_id', $bus_id)
                ->where('free', 0)->count();
    }
}
