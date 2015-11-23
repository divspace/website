<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class SmsRoute {

    public function map(Registrar $router) {
        $router->post('sms/incoming', 'SmsController@incoming')->name('sms.incoming');
        $router->post('sms/outgoing', 'SmsController@outgoing')->name('sms.outgoing');
    }

}
