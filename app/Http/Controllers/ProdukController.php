<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProdukController extends Controller
{
    //buat fungsi baru index
    function index(){
        //echo "up";
        $product = Product::get(['product_id','name','price','description']);
        var_dump($product);
    }
}
