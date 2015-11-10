<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndexController extends Controller {

    public function index() {
        $terminal = [
            'date'   => date('D M d').' 16:20:'.date('s'),
            'prompt' => 'Mac-Pro&#58;&#126; kyle&#36;'
        ];

        return view('index', compact('terminal'));
    }

}
