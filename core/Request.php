<?php

namespace app\core;

class Request
{
    public function getMethod()
    {
        return strtolower($_SERVER['REQUEST_METHOD']);
    }

    public function getUrl()
    {
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $path = str_replace(str_replace('index.php','',$_SERVER['SCRIPT_NAME']), "/",$_SERVER['REQUEST_URI']);
        $position = strpos($path, '?');
        if($position === false)
            return $path;
        return substr($path, 0, $position);
    }

    public function isGet()
    {
        return $this->getMethod() === 'get';
    }

    public function isPost()
    {
        return $this->getMethod() === 'post';
    }

    public function getBody()
    {
        $data = [];
        if ($this->isGet()) {
            foreach ($_GET as $key => $value) {
                $data[$key] = $value;
            }
        }
        if ($this->isPost()) {
            foreach ($_POST as $key => $value) {
                $data[$key] = $value;
            }
        }
        return $data;
    }
}