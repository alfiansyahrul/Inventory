<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function list(){
      $product = DB::table('product')->get();

      return view('product.product', ['product'=>$product]);
    }
}
