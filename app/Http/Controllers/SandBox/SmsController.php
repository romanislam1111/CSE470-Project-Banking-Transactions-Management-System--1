<?php

namespace App\Http\Controllers\SandBox;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    //

    public function processMessage(Request $request){

        $this->sendMessage($request->message, $request->number);
        return back()->with(['success' => "Messages on their way!"]);

    }


    private function sendMessage($message, $recipients)
{
    $account_sid = getenv("TWILIO_SID");
    $auth_token = getenv("TWILIO_AUTH_TOKEN");
    $twilio_number = getenv("TWILIO_NUMBER");
    $client = new Client($account_sid, $auth_token);
    $client->messages->create($recipients, 
            ['from' => $twilio_number, 'body' => $message] );
}


}
