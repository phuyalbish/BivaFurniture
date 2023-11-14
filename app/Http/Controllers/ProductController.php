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

        // return dd($request->file("image_path")->getClientOriginalName());
        // $request->validate([
        //     'name' => 'required',
        //     // 'image_path' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        // $imagePath = $request->file('image_path')->store('images'); // 'images' is the storage path

        // Product::create([
        //     'image_path' => $imagePath,
        //     'name' => $request->input('name'),
        //     'description' => $request->input('description'),
        //     'price' => $request->input('price'),
        //     'material' => $request->input('material'),
        //     'branch_id' => $request->input('branch_id'),
        // ]);
        

        return redirect()->route('developer.dashboard')->with('success', 'Product created successfully');
    }

   

 public function destroy($id)
    {
        $item = Product::find($id);

        if (!$item) {
            return redirect()->route('developer.dashboard')->with('error', 'Product not found');
        }

        $item->delete();

        return redirect()->route('developer.dashboard')->with('success', 'Product deleted successfully');
    }

    public function edit(Request $request, $id)
    {


         $record = Product::find($id);
        $newValues = $request->all();
        $record->update($newValues);
        return redirect()->route('developer.dashboard')->with('success', 'Product updated successfully');
    }
}
