<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class HomeRoute
{
    public function map(Registrar $router)
    {
        $router->get('/', 'HomeController@index')->name('home.index');
    }
}
