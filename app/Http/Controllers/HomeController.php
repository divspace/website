<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller {

    public function index() {
        $terminal = [
            'title'  => 'divspace.com',
            'date'   => date('D M d').' 16:20:'.date('s'),
            'prompt' => 'Mac-Pro:~ kyle$'
        ];

        return view('home.index', compact('terminal'));
    }

}
