<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Product;

class HomeController extends Controller
{
   public function home(){
        $item = new Product;
        $branches = Branch::all();
        $products = $item->joinCategory()->select('products.*', 'branches.name as category') ->get();
        

         return view('home',[ 'branch_array' => $branches->toArray(), 'product_array' => $products->toArray() ]);
    }
}
