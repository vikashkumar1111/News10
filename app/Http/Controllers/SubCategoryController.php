<?php

namespace App\Http\Controllers;

use App\Models\CategoryModels;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\SubCategoryModels;
class SubCategoryController extends Controller
{
    

    public function showData()
    {
        $data = SubCategoryModels::orderBy('id', 'desc')->get();
        $categories = CategoryModels::pluck('Name', 'Id');
    
        return view('admin.subcategory', ['data' => $data, 'categories' => $categories]);
    }

    public function store(Request $request) {
        $request->validate([
           'name' => 'required',
           'status' => 'required',
           'createdBy' => 'required',
           'category' =>'required',
       ]);
        // dd($request->all());
       $subcategory = new SubCategoryModels;
       $subcategory->Name = $request ->name;
       $subcategory->status = $request ->status;
       $subcategory->CreatedBy = $request ->createdBy;
       $subcategory->CatId = $request ->category;

       $subcategory->save();

       return back()->with('message', 'SubCategory Created successfully!');

   }

   public function update(Request $request, $id){

     //dd($request->all());
     $request->validate([
         'e_name' => 'required',
         'e_status' => 'required',
         'e_createdBy' => 'required',
         'e_category' =>'required',
     ]);
     

      DB::table('subcategory')
         ->where('Id', $id)
         ->update(['Name' => $request ->e_name, 'CreatedBy' => $request ->e_createdBy, 'status' => $request ->e_status, 'CatId' => $request ->e_category ]);
         

     return back()->with('message', 'SubCategory Updated successfully!');
    
    }

    public function statusUpdate(Request $request, $id){
        SubCategoryModels::where('Id', $id)
        ->update(['status' => $request->status]);
        return back()->with('message', 'Status Updated successfully!');
    }

    public function destroy($id){ 

        $subcategory = DB::table('subcategory')->where('Id', $id)->first();
    
        if ($subcategory) {
            $name = $subcategory->Name;
            
            DB::table('subcategory')->where('Id', $id)->delete();

            return back()->with('message', $name . ' SubCategory deleted!');
        }
        return back()->with('error', 'SubCategory not found!');
        
    }
    
}
