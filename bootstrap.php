<?php 

define('_DIR_ROOT', __DIR__);

// Xử lý Http root
if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    $web_root = 'https://'.$_SERVER['HTTP_HOST'];
} else {
    $web_root = 'http://'.$_SERVER['HTTP_HOST'];
}

$folder = str_replace($_SERVER['DOCUMENT_ROOT'], '', str_replace('\\','/', _DIR_ROOT)); // - /php-mvc-tutorial
$web_root = $web_root . $folder; // - http://localhost/php-mvc-tutorial

define('_WEB_ROOT', $web_root);

require_once 'configs/routes.php';
require_once 'app/App.php'; // Load App
require_once 'core/Controller.php'; // Load base Controller