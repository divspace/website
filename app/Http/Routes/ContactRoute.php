<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ContactRoute {

    public function map(Registrar $router) {
        $router->get('contact', 'ContactController@index')->name('index');
    }

}
