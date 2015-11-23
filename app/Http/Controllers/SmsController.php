<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SmsController extends Controller {

    public function incoming(Request $request) {
        $xml  = '<Response>';
        $xml .= '  <Message to="'.env('PHONE_NUMBER').'">';
        $xml .=      $request->input('From').' - '.htmlspecialchars($request->input('Body'));
        $xml .= '  </Message>';
        $xml .= '</Response>';

        return response($xml, 200)->header('Content-Type', 'text/xml');
    }

}
