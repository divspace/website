<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller {

    public function record(Request $request) {
        \Mail::send('emails.voicemail', [
            'from' => $request->input('From'),
            'forwardedFrom' => $request->input('ForwardedFrom'),
            'voicemail' => $request->input('RecordingUrl'),
            'duration' => $request->input('RecordingDuration')
        ], function($message) {
            $message->to('kyle@divspace.com', 'Kyle Anderson');
            $message->from('postmaster@divspace.com', 'Divspace');
            $message->subject('New Voicemail');
        });

        $xml = '<Response></Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

    public function sms() {
        //
    }

    public function voice() {
        $xml  = '<Response>';
        $xml .= '  <Dial callerId="'.env('TWILIO_NUMBER').'" timeout="15">';
        $xml .= '    <Number>'.env('PHONE_NUMBER').'</Number>';
        $xml .= '  </Dial>';
        $xml .= '  <Say voice="man">I am currently unavailable. Please leave a message after the beep.</Say>';
        $xml .= '  <Record action="'.env('APP_URL').'/api/record" method="POST" maxLength="300" />';
        $xml .= '</Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

}
