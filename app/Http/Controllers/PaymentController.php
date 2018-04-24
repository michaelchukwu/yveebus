<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Paystack;
use App\Http\Controllers\WalletController;
use App\Payment;
use Auth;
class PaymentController extends Controller
{

    /**
     * Redirect the User to Paystack Payment Page
     * @return Url
     */
    public function redirectToGateway()
    {
        return Paystack::getAuthorizationUrl()->redirectNow();
    }

    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        $paymentDetails = Paystack::getPaymentData();

        $this->recordPayment($paymentDetails);
        return redirect()->route('wallet')
                        ->with('success','Wallet Credited successfully');
        
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
    public function recordPayment($paymentDetails)
    {
        // dd($paymentDetails['data']['amount']/100);
        $pay = $paymentDetails['data']['amount']/100;
        $payment = new Payment();
        $payment->amount = $pay;
        $payment->user_id = Auth::user()->id;
        $payment->type = 'credit';
        $payment->source = 'Paystack';
        $payment->save();

        // dd($paymentDetails['status']);
        if($paymentDetails['status'] == true)
        {
            $wallet = new WalletController();
            $wallet->add($paymentDetails);
        }
    }
        public function recordCharge($paymentamount)
    {
        // dd($paymentDetails['data']['amount']/100);
        $pay = $paymentamount;
        $payment = new Payment();
        $payment->amount = $pay;
        $payment->user_id = Auth::user()->id;
        $payment->type = 'debit';
        $payment->source = 'Trip';
        if($payment->save()){
            return $payment->id;
        }
    }
}