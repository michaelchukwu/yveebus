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
        // $this->validate($request, [
        //     'from' => 'required',
        //     'to' => 'required|different:from'
        // ]);

        $input = $request->all();
            // dd($input['from']);
        $data = DB::table('routes')
        ->where('from', $input['from'])
        ->where('to', $input['to'])
        ->where('active', 1)
        ->get();
        $location = Location::get();
        

        // return response()->json(array('routes'=>$routes), 200);
        return view('buses.search', compact('data', 'location'));
    }
    public function bookBus(Request $request)
    {
        // get all the info from booking
        $input = $request->all();
        $wallet = new WalletController();
        // check the wallet balance
        $walletbalance = Wallet::where('user_id',Auth::user()->id)->pluck('amount');
        // dd($walletbalance[0]);
        // consider promo code
        $amount2debit = $input['amount']; 
        if($input['promo_code'] != null){
            $promoDeets = Promo::where('code', $input['promo_code'])->get();
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
        }
        
        // debit the wallet
        if($amount2debit > (int)$walletbalance[0]){
            return redirect()->back()->with('error', 'You do not have sufficient balance');
        }
        $wallet->use($amount2debit);
        // create a payment

        // create a trip
        $trip = new Trip();
        $trip->user_id = Auth::user()->id;
        $trip->driver_id = 2;
        //return payment id;
        $trip->route_id = $input['route_id'];
        $trip->completed = 0;
        $trip->save();
        // claim a seat
        // record promo use
        if($input['promo_code'] != null){
            //promo use
        }
        // return a ticket and estimated time of bus arival

        
        dd($input);
    }
    public function showBus($id)
    {   
        $route = Route::find($id);
        return view('buses.show', compact('route'));
    }
}
