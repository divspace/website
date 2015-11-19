<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TwilioController extends Controller {

    public function voice() {
        $xml  = '<Response>';
        $xml .= '  <Dial callerId="'.env('TWILIO_NUMBER').'" timeout="15">';
        $xml .= '    <Number>'.env('PHONE_NUMBER').'</Number>';
        $xml .= '  </Dial>';
        $xml .= '  <Say voice="man">I am unable to take your call right now. Please leave your name, number, and a short message after the beep.</Say>';
        $xml .= '  <Record action="'.env('APP_URL').'/twilio/record" method="POST" maxLength="300" />';
        $xml .= '</Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

    public function record(Request $request) {
        \Mail::send('emails.voicemail', [
            'phoneNumber' => $request->input('From'),
            'messageLink' => $request->input('RecordingUrl'),
            'messageDuration' => $request->input('RecordingDuration')
        ], function($message) {
            $message->to('kyle@divspace.com', 'Kyle Anderson');
            $message->from('postmaster@divspace.com', 'Divspace');
            $message->subject('New Voicemail From '.$phoneNumber.' ('.$request->input('RecordingDuration').' Seconds)');
        });

        $xml = '<Response></Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

}
