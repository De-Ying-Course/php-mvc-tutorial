<?php 

/**
 * Kế thừa tù class Model
 * 
 */

class ProductModel {
    protected $_table = 'products';

    public function getListProduct()
    {
        $data = [
            'Product Item 1',
            'Product Item 2',
            'Product Item 3'
        ];

        return $data;
    }

    public function getDetailProduct($id)
    {
        $data = [
            'Product Item 1',
            'Product Item 2',
            'Product Item 3'
        ];

        return $data[$id];
    }
}