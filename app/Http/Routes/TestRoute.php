<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class TestRoute {

    public function map(Registrar $router) {
        $router->get('test', 'TestController@index')->name('test');
    }

}
