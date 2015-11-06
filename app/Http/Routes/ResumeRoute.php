<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ResumeRoute {

    public function map(Registrar $router) {
        $router->get(null, 'ResumeController@index')->name('index');
    }

}
