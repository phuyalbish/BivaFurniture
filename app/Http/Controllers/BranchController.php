<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class BranchController extends Controller
{
public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        Branch::create($request->all());

        return redirect()->route('developer.dashboard')->with('success', 'Branch created successfully');
    }

   

 public function destroy($id)
    {
        $item = Branch::find($id);

        if (!$item) {
            return redirect()->route('developer.dashboard')->with('error', 'Branch not found');
        }

        $item->delete();

        return redirect()->route('developer.dashboard')->with('success', 'Branch deleted successfully');
    }

    public function edit(Request $request, $id)
    {


         $record = Branch::find($id);
        $newValues = $request->all();
        $record->update($newValues);
        return redirect()->route('developer.dashboard')->with('success', 'Branch updated successfully');
    }

}
