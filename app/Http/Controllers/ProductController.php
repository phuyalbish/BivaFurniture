<?php
  
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{




public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Product::create($request->all());

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
        return redirect()->route('developer.dashboard')->with('success', 'Product created successfully');
    }
}
