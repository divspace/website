<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SmsController extends Controller {

    public function incoming(Request $request) {
        if($request->input('From') === env('PHONE_NUMBER')) {
            $message = 'Hey, Kyle';
        } else {
            $message = $request->input('From').' - '.htmlspecialchars($request->input('Body'));
        }

        $xml  = '<Response>';
        $xml .= '  <Message to="'.env('PHONE_NUMBER').'">';
        $xml .=      $message;
        $xml .= '  </Message>';
        $xml .= '</Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

}
