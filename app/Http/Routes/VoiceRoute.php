<?php namespace App\Http\Routes;

use Illuminate\Contracts\Routing\Registrar;

class VoiceRoute
{
    public function map(Registrar $router)
    {
        $router->post('voice/incoming', 'VoiceController@incoming')->name('voice.incoming');
        $router->post('voice/record', 'VoiceController@record')->name('voice.record');
    }
}
