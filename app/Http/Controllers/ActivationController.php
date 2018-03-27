<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Activation;
use App\User;
class ActivationController extends Controller
{
    public function index()
    {
        if (Auth::user()->activated == 0)
        {
            $check = Activation::where('user_id', Auth::user()->id)->first();
            if($check->count() == 0){
                $code = $this->generateActivationCode();
                Activation::create([
                    'user_id'=>Auth::user()->id,
                    'code'=>$code
                ]);
            return view('auth.activate');
            }else{
                return view('auth.activate');
            }
            
        }else{
            return redirect('/home');
        }
    }

    public function activate(Request $request)
    {
        $check = Activation::where('user_id', Auth::user()->id)->where('code',$request->input('code'))->first();
        if($check != null && $check->count() > 0)
        {
            User::where('id', $check->user_id)->update(['activated'=>1]);
            Activation::where('user_id', $check->user_id)->delete();
            return redirect('/home');
        }else{
            return redirect()->back()->with('errors', 'You do not have any pending activation');
        }
    }
    public function generateActivationCode(){
    $an = "0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $su = strlen($an) - 1;
    return substr($an, rand(0, $su), 1).
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1) .
            substr($an, rand(0, $su), 1);
    }
}
