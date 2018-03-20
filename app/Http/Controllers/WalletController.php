<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;
use Auth;
class WalletController extends Controller
{   
    //index - show the amount you have 
    //add - will add to the amount in your wallet
    //use - will subtract from the amount in your wallet
    public function index()
    {   
        $id = Auth::user()->id;
        $wallet = Wallet::where('user_id',$id)->get();

        return view('wallets.index', compact('wallet'));
    }
    public function create()
    {
        $wallet = new Wallet();
        $wallet->user_id = Auth::user()->id;
        $wallet->amount = 0;
        $wallet->save();
        return redirect()->back()->with('success','Wallet Created  successfully');
    }
    public function add($paymentDetails)
    {
        $id = Auth::user()->id;
        $wallet = new Wallet();
        $amount = $wallet->where('user_id', $id)->pluck('amount');
        // dd($amount);
        foreach($amount as $key=>$cash){
            $money = $cash + ($paymentDetails['data']['amount']/100);
            $wallet->where('user_id', $id)->update(['amount'=>$money]);
        }
        
        
        return true;
        // dd($paymentDetails);
    }
    public function use($amount2debit)
    {
        $id = Auth::user()->id;
        $wallet = new Wallet();
        $amount = $wallet->where('user_id', $id)->pluck('amount');
        // dd($amount);
        foreach($amount as $key=>$cash){
            $money = $cash - $amount2debit;
            $wallet->where('user_id', $id)->update(['amount'=>$money]);
        }
        
        
        return true;
    }
}
