<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SmsController extends Controller {

    public function incoming(Request $request) {
        if($request->input('From') === env('PHONE_NUMBER')) {
            $xml  = '<Response>';
            $xml .= '  <Redirect method="POST">';
            $xml .=      route('sms.outgoing');
            $xml .= '  </Redirect>';
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
        $message = $request->input('From').' - '.$request->input('Body').' - Sent from my iPhone';

        $xml  = '<Response>';
        $xml .= '  <Message to="'.$request->input('From').'" from="'.env('TWILIO_NUMBER').'">';
        $xml .=      $message;
        $xml .= '  </Message>';
        $xml .= '</Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

}
