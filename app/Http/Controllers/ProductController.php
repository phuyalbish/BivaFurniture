<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{




public function store(Request $request)
    {
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
        $uploaddata->description = $request->description;
        $uploaddata->price = $request->price;
        $uploaddata->material = $request->material;
        $uploaddata->branch_id = $request->branch_id;
        $uploaddata->image_path = $img_name;

        $uploaddata->save();

        return redirect()->route('developer.dashboard')->with('success', 'Product created successfully');


        // if ($request->hasFile('image')) {
        //     // Delete the old image if it exists
        //     if ($record->image_path) {
        //         Storage::delete($record->image_path);
        //     }

        //     // Handle the new image upload
        //     $newImagePath = $request->file('image')->store('images');

        //     // Update the model with the new image path
        //     $record->update(['image_path' => $newImagePath]);
        // }
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

         $record = Product::find($id);


        $record->update([
                    'name' => $request->name,
                    'description'=>$request->description,
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
}
