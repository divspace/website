<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ApiRoute {

    public function map(Registrar $router) {
        $router->get('api/v1/users', 'UserController@all')->name('api.user.all');
        $router->get('api/v1/shifts', 'ShiftController@all')->name('api.shift.all');
    }

}
