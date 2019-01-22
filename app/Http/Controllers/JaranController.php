<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JaranController extends Controller
{
    function index() {
        echo "test controller";
    }

    function manggil(){
        return "test manggil yang lain";
    }

    function home() {
        return view('mamalia/kucing');
    }
}
