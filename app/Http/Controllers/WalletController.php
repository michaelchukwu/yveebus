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
    public function add()
    {

    }
    public function use()
    {

    }
}
