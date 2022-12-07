<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function about()
    {
    return view('./pages/about');
    }

    public function products()
    {
   
    return view('./pages/products');
    }
    public function insertProduct()
    {
   
    return view('./pages/insertProduct');
    }
}
