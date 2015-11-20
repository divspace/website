<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ResumeController extends Controller {

    public function index() {
        $email = $this->obfuscateEmail('kyle@divspace.com');

        return view('resume.index', compact('email'));
    }

    private function obfuscateEmail($string) {
        $result = '';
        $encode = array('.', ':', '@');

        for($i = 0; $i < strlen($string); ++$i) {
            if(in_array($string[$i], $encode) || mt_rand(1, 100) < 50) {
                if(mt_rand(0, 1)) {
                    $result .= '&#'.ord($string[$i]).';';
                } else {
                    $result .= '&#x'.dechex(ord($string[$i])).';';
                }
            } else {
                $result .= $string[$i];
            }
        }

        return $result;
    }

}
