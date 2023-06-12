<?php

class Product extends Controller
{
    public $data = [];

    public function index()
    {
        $data = $this->model('ProductModel');
        $products = $data->getListProduct();

        $this->data['sub_content']['products'] = $products;
        $this->data['page_title'] = 'Danh sách sản phẩm';

        $this->data['content'] = 'products/list';
        // Render views
        $this->render('layouts/client_layout', $this->data);
    }

    public function detail($id=0)
    {
        $product = $this->model('ProductModel');
        $this->data['sub_content']['info'] = $product->getDetailProduct($id);
        $this->data['page_title'] = "Chi tiết sản phẩm";
        $this->data['content'] = 'products/detail';

        // echo "<pre>";
        // print_r($this->data);
        // echo "</pre>";

        $this->render('layouts/client_layout', $this->data);
    }
}