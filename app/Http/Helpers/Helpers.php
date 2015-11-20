<?php

function obfuscate($string, $percentage = 75) {
    $result = '';
    $encode = array('.', ':', '@');

    for($i = 0; $i < strlen($string); ++$i) {
        if(in_array($string[$i], $encode) || mt_rand(1, 100) < $percentage) {
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
