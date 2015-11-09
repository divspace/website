<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ContactRoute {

    public function map(Registrar $router) {
        $router->get('conact', 'ContactController@index')->name('index');
    }

}
