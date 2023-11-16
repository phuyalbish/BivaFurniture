<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Product;
use App\Models\BasicInfo;

class DeveloperController extends Controller
{

    function CmsLogin(){
        return view('login');
    }


    function CmsLoginCheck(Request $request){

     if($request->input('username') == "biva-admin" && ($request->input('password') == "biva-password")){
        setcookie('cookie_developer', $request->input('username'), time() + (86400 * 90), "/");
            return redirect(route('developer.dashboard'));
        }
        else{
            
            $dev_err_login="Wrong UserName or Password";
            return view('login',compact('dev_err_login'));
        }
        return view('login',compact('dev_err_login'));
    }


    function CmsSignOut(){
        unset($_COOKIE['cookie_developer']);
        setcookie("cookie_developer", "", time()-3600);
        return redirect(route('developer.login'));

    }



    function CMSDashboard(){

         $basicinfo = BasicInfo::all();
        $item = new Product;
        $branches = Branch::all();
        $products = $item->joinCategory()->select('products.*', 'branches.name as category')->get();


        $product_array = $products->toArray();
         return view('dashboard',[ 'basicinfo_array'=> $basicinfo->toArray(), 'branch_array' => $branches->toArray(), 'product_array' => $products->toArray() ]);
   
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
