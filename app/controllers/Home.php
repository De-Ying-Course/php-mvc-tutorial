<?php

class Home
{
    public function index()
    {
        echo "a";
    }

    public function details($slug='', $id='') {
        echo 'ID sản phẩm: '. $id .'</br>';
        echo 'slug: ' . $slug;
    }
}