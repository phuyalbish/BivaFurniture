<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Product;
use App\Models\BasicInfo;

class HomeController extends Controller
{
   public function home(){
        $branches = Branch::all();
         $alltotalsale = Product::sum('totalsale');
         $products = Product::select('products.*', 'branches.name AS category')
        ->join('branches', 'products.branch_id', '=', 'branches.id')
        ->orderBy('products.totalsale', 'desc')
        ->take(3)
        ->get();
         $basicinfo = BasicInfo::all();
         return view('home',[ 'basicinfo_array'=> $basicinfo->toArray(), 'branch_array' => $branches->toArray(), 'product_array' => $products->toArray(), 'alltotalsale'=> $alltotalsale ]);
    }
    public function product(){
        $branches = Branch::all();
         $products = Product::select('products.*', 'branches.name AS category')
        ->join('branches', 'products.branch_id', '=', 'branches.id')
        ->orderBy('products.totalsale', 'desc')->get();
         $basicinfo = BasicInfo::all();
         return view('products',[ 'basicinfo_array'=> $basicinfo->toArray(), 'branch_array' => $branches->toArray(), 'product_array' => $products->toArray()]);
    }
    public function ind_product($id){

        $branches = Branch::all();

         $basicinfo = BasicInfo::all();
     $products = Product::select('products.*', 'branches.name AS category')
    ->join('branches', 'products.branch_id', '=', 'branches.id')
    ->where('products.id', $id)
    ->get();
      return view('indivisualproduct',[ 'basicinfo_array'=> $basicinfo->toArray(), 'branch_array' => $branches->toArray(), 'product_array' => $products->toArray()]);
           
    }
}
