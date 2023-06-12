<?php
    
class Route {

    public function handleRoute($url)
    {
        global $routes;
        unset($routes['default_controller']);

        // Loại bỏ kí tự 2 đầu
        $url = trim($url, '/');

        if (empty($url)) {
            $url = '/';
        }

        $handleUrl = $url;

        // Check mảng có dữ liệu hay không
        if (!empty($routes)) {
            foreach ($routes as $key => $value) {
                // Khi chạy qua route, so sánh Url trên trình duyệt với Url trong key khớp nhau => thực hiện thay thế 
                if (preg_match('~'.$key.'~is', $url)) {
                    $handleUrl = preg_replace('~'.$key.'~is', $value, $url);
                }
            }
        }

        return $handleUrl;
    }
}