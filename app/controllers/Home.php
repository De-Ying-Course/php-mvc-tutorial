<?php

class Home extends Controller
{
    public function index()
    {
        $data =  [
            'Item 1',
            'Item 2',
            'Item 3'
        ];

        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
}