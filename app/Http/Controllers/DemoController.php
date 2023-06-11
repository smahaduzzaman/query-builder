<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DemoController extends Controller
{
    function DemoAction(){
        // show all products from products table
        $products = DB::table('products')->get();
        return $products;
    }
}
