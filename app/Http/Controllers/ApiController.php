<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ApiController extends Controller {

    public function record(Request $request) {
        \Mail::send('emails.voicemail', [
            'from' => $request->input('From'),
            'forwardedFrom' => $request->input('ForwardedFrom'),
            'message' => $request->input('RecordingUrl').'.mp3',
            'duration' => $request->input('RecordingDuration')
        ], function($message) {
            $message->to('kyle@divspace.com', 'Kyle Anderson');
            $message->from('postmaster@divspace.com', 'Divspace');
            $message->subject('Message From '.$request->input('From').' ('.$request->input('RecordingDuration').')');
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
        $xml .= '  <Say voice="man">';
        $xml .= '    I am currently unavailable.';
        $xml .= '    Please leave a message after the beep.';
        $xml .= '  </Say>';
        $xml .= '  <Record action="'.env('APP_URL').'/api/record" maxLength="300" />';
        $xml .= '</Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

}
