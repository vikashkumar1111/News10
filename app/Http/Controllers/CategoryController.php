<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\CategoryModels;

class CategoryController extends Controller
{
    public function showData()
    {
        //$data = DB::table('category')->get();
        // $data = CategoryModels::all();
        $data = CategoryModels::orderBy('id', 'desc')->get();
    
        return view('admin.category', ['data' => $data]);
    }
    public function store(Request $request) {
         $request->validate([
            'name' => 'required',
            'status' => 'required',
            'createdBy' => 'required',
        ]);
        // // print_r($validateData);
        // // exit();
          //dd($request->all());
        $category = new CategoryModels;
        $category->Name = $request ->name;
        $category->status = $request ->status;
        $category->CreatedBy = $request ->createdBy;

        $category->save();

        return back()->with('message', 'Category Created successfully!');

    }
    public function update(Request $request, $id){
       // dd($request->all());
        $request->validate([
            'e_name' => 'required',
            'e_status' => 'required',
            'e_createdBy' => 'required',
        ]);
        // $category = CategoryModels::find($id);
        // $category->Name = $request ->e_name;
        // $category->status = $request ->e_status;
        // $category->CreatedBy = $request ->e_createdBy;

        // $category->save();

        $query1 = DB::table('category')
            ->where('Id', $id)
            ->update(['Name' => $request ->e_name, 'CreatedBy' => $request ->e_createdBy, 'status' => $request ->e_status ]);
            
    //     CategoryModels::where('Id', $id)
    //   ->update(['Name' => $request->e_name])
    //   ->update(['status' => $request->e_status])
    //   ->update(['CreatedBy' => $request->e_createdBy]);

        return back()->with('message', 'Category Updated successfully!');
       
    }
    public function statusUpdate(Request $request, $id){
        CategoryModels::where('Id', $id)
        ->update(['status' => $request->status]);
        return back()->with('message', 'Status Updated successfully!');
    }

    public function destroy($id){ 



        $category = DB::table('category')->where('Id', $id)->first();
    
        if ($category) {
            $name = $category->Name;
            
            DB::table('category')->where('Id', $id)->delete();

            return back()->with('message', $name . ' Category deleted!');
        }
        
        return back()->with('error', 'Category not found!');
        
        //     $category = CategoryModels::find($id);
        //     $name = $category->Name;
        //     //echo $category;
        //     $category->delete();
            
            
        //    return back()->with('message', '"'.$name.'"'.' Category deleted!');
    }

}
