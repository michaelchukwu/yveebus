<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Route;
use App\Location;
use App\Trip;
use DB;
use App\Bus;
use Auth;
use App\Promo;
use App\Wallet;
class BusController extends Controller
{
    public function index()
    {
        $buses = Bus::get();
        return view('buses.index', compact('buses'));
    }

    /**
     * Display the specified resource for editing.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bus = Bus::find($id);

        return view('buses.edit',compact('bus'));
    }

     /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'reg_num' => 'required',
            'seats' => 'required'
        ]);


        $bus = Bus::find($id);
        $bus->reg_num = $request->input('reg_num');
        $bus->seats = $request->input('seats');
        $bus->save();

        return redirect()->back()->with('success', 'Bus edited successfully');
    }

    public function searchBus(Request $request){

        $input = $request->all();
        // $from = Location::select('id')->where('name', $input['from'])->first();
        // $to = Location::select('id')->where('name', $input['to'])->first();
        // $data = DB::table('routes')
        // ->where('from', $from->id)
        // ->where('to', $to->id)
        // ->where('active', 1)
        // ->get();
        // $location = Location::get();
        //
        $data->from = $input['from'];
        $data->from = $input['from'];
        $data->from = $input['from'];
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
        // consider promo code
        $amount2debit = $input['amount']; 
        if($input['promo_code'] != null){
            $promoDeets = Promo::where('code', $input['promo_code'])->get();
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
        // $input['from'] = 1;
        // $input['to'] = 2;
        // $input['duration'] = 23;
        // dd($input);
        $input['bus_id'] = 1;              
        $trip = new Trip();
        $trip->user_id = Auth::user()->id;
        $trip->driver_id = 2;
        //return payment id;
        $trip->payment_id = $paymentdone;
        $trip->from = $input['from_id'];
        $trip->to = $input['to_id'];
        $trip->duration = $input['duration_value'];
        $trip->distance = $input['distance_value'];
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
        $trip->time = 777;
        // send the time for a countdown
        return view('buses.booked', compact('trip'));
    }

    public function showBus(Request $request)
    {   
        // $route = Route::find($id);
        $data = $request->all();
        $data['base_amount'] = DB::table('amount')->pluck('base_amount');
        $data['price_per_km'] = DB::table('amount')->pluck('price_per_km');
        
        // dd($data);
        return view('buses.show', compact('data'));
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

    //create bus
    public function create()
    {
        return view('buses.create');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'seats' => 'required',
            'reg_num' => 'required|unique:buses,reg_num',
        ]);


        $bus = new Bus();
        $bus->seats = $request->input('seats');
        $bus->reg_num = $request->input('reg_num');
        $bus->save();


        return redirect()->route('bus')
                        ->with('success','Bus Added successfully');
    }
}
