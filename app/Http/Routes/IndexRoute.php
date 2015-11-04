<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class IndexRoute {

    public function map(Registrar $router) {
        $router->get(null, 'IndexController@index')->name('index');
    }

}
