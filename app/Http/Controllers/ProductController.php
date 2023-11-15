<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\BasicInfo;

class ProductController extends Controller
{




public function store(Request $request)
    {
            $validatedData = $request->validate([
            'image_path' => 'required|file|max:2048', // 'file' field is required, must be a file, and its maximum size is 2048 KB (2 MB)
            ]);
        
            $image = $request->image_path;
            $img_name = $image->getClientOriginalName();

            $del_img = public_path('storage/images/'.$img_name);
                    if(file_exists($del_img)){
                        unlink($del_img);
                    }

            $image->storeAs('public/images', $img_name);
            // return dd($name);
            $uploaddata = new Product;
            $uploaddata->name = $request->name;
            $uploaddata->pro_des = $request->des;
            $uploaddata->price = $request->price;
            $uploaddata->material = $request->material;
            $uploaddata->branch_id = $request->branch_id;
            $uploaddata->image_path = $img_name;
            $uploaddata->save();
            return redirect()->route('developer.dashboard')->with('success', 'Product created successfully');
    
    }

   

 public function destroy($id)
    {
        $item = Product::find($id);

        if (!$item) {
            return redirect()->route('developer.dashboard')->with('error', 'Product not found');
        }
        $del_img = public_path('storage/images/'.$item->image_path);
        if(file_exists($del_img)){
            unlink($del_img);
        }
        $item->delete();

        return redirect()->route('developer.dashboard')->with('success', 'Product deleted successfully');
    }

    public function edit(Request $request, $id)
    {
                $validatedData = $request->validate([
            'image_path' => 'file|nullable|max:2048', // 'file' field can be nullable, must be a file if present, and its maximum size is 2048 KB (2 MB)
        ]);
         $record = Product::find($id);
            $record->update([
                    'name' => $request->name,
                    'pro_des'=>$request->des,
                    'price'=>$request->price,
                    'material'=>$request->material,
                    'branch_id'=>$request->branch_id,
                ]);
            if($request->image_path != null ){
                $image = $request->image_path;
                $img_name = $image->getClientOriginalName();
                $del_img = public_path('storage/images/'.$img_name);
                $del_imgprev = public_path('storage/images/'.$record->image_path);
                if(file_exists($del_imgprev)){
                    unlink($del_imgprev);
                }
                if(file_exists($del_img)){
                    unlink($del_img);
                }
                $image->storeAs('public/images', $img_name);
                $record->update([
                    'image_path' => $img_name
                ]);
            }
            return redirect()->route('developer.dashboard')->with('success', 'Product updated successfully');
          
    }

     public function sale(Request $request, $id)
    {

         $record = Product::find($id); 
         $record->update([
                    'totalsale' => $request->sales
                ]);
        return redirect()->route('developer.dashboard')->with('success', 'Product updated successfully');
          
    }



    public function basicedit(Request $request)
    {
         $record = BasicInfo::find(1);
            $record->update([
                    'addredd'=>$request->address,
                    'link'=>$request->link,
                    'phone'=>$request->phone,
                    'email'=>$request->email,
                    'footer_des'=>$request->des,

                ]);
            return redirect()->route('developer.dashboard')->with('success', 'Basics updated successfully');
          
    } 
}

