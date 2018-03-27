<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function send($recipient, $activation_code)
    {
      $username = 'ceeless';
      $password = 'loveth24';
      $sender = 'MoluePro';
      $message = "Your activation code is $activation_code";
      $message = urlencode($message);
      $senderid = urlencode($sender);
      // $url = 'http://api.smartsmssolutions.com/smsapi.php?username='.$username.'&password='.$password.'&sender='.$senderid.'&recipient='.$senderid.'&message='.$message.'&';
    //   $url = 'http://smsmobile24.com/components/com_spc/smsapi.php?username='.$username.'&password='.$password.'&sender='.$senderid.'&recipient='.$recipient.'&message='.$message;
      $url = 'http://www.smsmobile24.com/index.php?option=com_spc&comm=spc_api&username='.$username.'&password='.$password.'&sender='.$senderid.'&recipient='.$recipient.'&message='.$message.'&';
      $send = file_get_contents($url);
      return $send;

    }

// $username = '';  $password = ''; $message = ''; $senderid = ''; $recipients = ''; $url = 'http://api.smartsmssolutions.com/smsapi.php'; $get_sms = sendsms_get($username, $password, $message, $senderid, $recipients);
//
// echo $get_sms
//       $smsUsername
//       $smsPassword
//       $sender
//       $url = 'http://api.smartsmssolutions.com/smsapi.php?username=YourUsername&password=YourPassword&sender=SenderID&recipient=234809xxxxxxx,2348030000000&message=YourMessage';
//     }
}
