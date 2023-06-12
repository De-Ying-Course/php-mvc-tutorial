<?php

class App 
{
    private $__controller, $__action, $__params;

    // Hàm khời tạo
    public function __construct()
    {
        global $routes;

        if (!empty($routes['default_controller'])) {
            $this->__controller = $routes['default_controller'];
        }

        $this->__action = 'index';
        $this->__params = [];
        $this->handleUrl();
    }

    // Lấy đường dẫn trên URL
    public function getUrl()
    {
        if (!empty($_SERVER['PATH_INFO'])) {
            $url = $_SERVER['PATH_INFO'];
        } else {
            $url = '/';
        }

        return $url;
    }

    // Tách URL
    public function handleUrl()
    {
        $url = $this->getUrl();
        $urlArr = array_filter(explode('/', $url)); // Hàm biến chuỗi thành mảng
        $urlArr = array_values($urlArr);

        // Xử lý controller
        if (!empty($urlArr[0])) {
            $this->__controller = ucfirst($urlArr[0]); // Hàm viết hoa chữ cái đầu tiên
        } else {
            $this->__controller = ucfirst($this->__controller);
        }

        if (file_exists('app/controllers/' . ($this->__controller) . '.php')) {
            require_once 'controllers/' . ($this->__controller) . '.php';
            $this->__controller = new $this->__controller();
            unset($urlArr[0]);
        } else {
            $this->loadError();
        }

        // Xử lý action
        if (!empty($urlArr[1])) {
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        // Xử lý params
        $this->__params = array_values($urlArr);

        call_user_func_array([$this->__controller, $this->__action], $this->__params);

        // echo "<pre>";
        // print_r($this->__params);
        // echo "</pre>";

    }

    public function loadError($name='404')
    {
        require_once 'errors/' . $name . '.php';
    }
}