<?php

namespace app\core;

class Helpers
{
    const root = 'php-mvc-framework';
    public function route($uri){
        echo ('http://'.$_SERVER['SERVER_NAME'].'/'.self::root.'/public/'.$uri);
    }

    public function url($path){
        echo 'http://'.$_SERVER['SERVER_NAME'].'/'.self::root.'/assets/'.$path;
    }
    //-----------------------------------------------------//
    public function js($path){
        echo 'http://'.$_SERVER['SERVER_NAME'].'/'.self::root.'/resources/js/'.$path;
    }
}