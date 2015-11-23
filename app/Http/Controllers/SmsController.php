<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SmsController extends Controller {

    public function incoming(Request $request) {
        if($request->input('From') === env('PHONE_NUMBER')) {
            $xml  = '<Response>';
            $xml .= '  <Message action="/sms/outgoing" method="POST" />';
            $xml .= '</Response>';
        } else {
            $message = $request->input('From').' - '.htmlspecialchars($request->input('Body'));

            $xml  = '<Response>';
            $xml .= '  <Message to="'.env('PHONE_NUMBER').'">';
            $xml .=      $message;
            $xml .= '  </Message>';
            $xml .= '</Response>';
        }

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

    public function outgoing(Request $request) {
        if(preg_match('/\+[0-9]{10}/', $request->input('Body'), $phoneNumbers)) {
            $phoneNumber = $phoneNumbers[1];

            $message = 'Sent from my iPhone';

            $xml  = '<Response>';
            $xml .= '  <Message to="'.$phoneNumber.'" from="'.env('TWILIO_NUMBER').'">';
            $xml .=      $message;
            $xml .= '  </Message>';
            $xml .= '</Response>';

            return response($xml, 200)->header('Content-Type', 'text/xml');
        }
    }

}
