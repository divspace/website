<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ContactRoute
{
    public function map(Registrar $router)
    {
        $router->post('contact', 'ContactController@index')->name('contact.index');
    }
}
