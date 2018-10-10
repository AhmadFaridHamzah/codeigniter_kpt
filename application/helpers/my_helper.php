<?php

    function test_helper(){
        echo 'helper';
    }

    function encryptUrl($str){
        $CI =& get_instance();
        $text = $CI->encryption->encrypt($str);
        $ciphertext = strtr(
            $text,
            [
                '+' => '.',
                '=' => '-',
                '/' => '~'
            ]
        );
        return $ciphertext;
    }

    function decryptUrl($ciphertext){
        $CI =& get_instance();
        $text = strtr(
            $ciphertext,
            [
                '.' => '+',
                '-' => '=',
                '~' => '/'
            ]
        );

        $str = $CI->encryption->decrypt($text);
        return $str;
    }