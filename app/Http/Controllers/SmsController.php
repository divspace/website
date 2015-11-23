<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SmsController extends Controller {

    public function incoming(Request $request) {
        if($request->input('From') === env('PHONE_NUMBER')) {
            $xml  = '<Response>';
            $xml .= '  <Redirect method="POST">'.route('sms.outgoing').'</Redirect>';
            $xml .= '</Response>';
        } else {
            $message  = 'From: '.$request->input('From')."\n";
            $message .= htmlspecialchars($request->input('Body'));

            $xml  = '<Response>';
            $xml .= '  <Message to="'.env('PHONE_NUMBER').'">'.$message.'</Message>';
            $xml .= '</Response>';
        }

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

    public function outgoing(Request $request) {
        $message = htmlspecialchars($request->input('Body'));

        $xml  = '<Response>';
        $xml .= '  <Message to="'.$request->input('From').'" from="'.env('TWILIO_NUMBER').'">'.$message.'</Message>';
        $xml .= '</Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

}
