<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class TwilioRoute {

    public function map(Registrar $router) {
        $router->post('twilio/voice', 'TwilioController@voice')->name('twilio.voice');
        $router->post('twilio/record', 'TwilioController@record')->name('twilio.record');
    }

}
