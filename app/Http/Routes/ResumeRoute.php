<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class ResumeRoute {

    public function map(Registrar $router) {
        $router->get('resume', 'ResumeController@index')->name('resume.index');
    }

}
