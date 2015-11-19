<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\Request;

class ApiController extends Controller {

    public function record(Request $request) {
        $xml = '<Response></Response>';

        $response = Response::make($xml, 200);

        $response->header('Content-Type', 'text/xml');

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

        return $response;
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

        $response = Response::make($xml, 200);

        $response->header('Content-Type', 'text/xml');

        return $response;
    }

}
