<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ApiRoute {

    public function map(Registrar $router) {
        $router->post('api/record', 'ApiController@record')->name('api.record');
        $router->post('api/sms', 'ApiController@sms')->name('api.sms');
        $router->post('api/voice', 'ApiController@voice')->name('api.voice');
    }

}
