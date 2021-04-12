<?php

namespace app\core;
use app\core\Helpers;

class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header('Location: http://'.$_SERVER['SERVER_NAME'].'/'.Helpers::root.'/public'.$url);
    }
}