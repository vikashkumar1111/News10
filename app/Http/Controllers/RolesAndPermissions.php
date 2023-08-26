<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\RolesModel;
use App\Models\PermissionsModel;


class RolesAndPermissions extends Controller
{
    
    
    public function showData()
    {
        $RolesData = RolesModel::orderBy('id', 'desc')->get();
        $PermissionsData = PermissionsModel::orderBy('id', 'desc')->get();
        $ActionMenu = PermissionsModel::pluck('action_menu')->unique();
        $RolesName = RolesModel::pluck('Role', 'Id');

        return view('admin.M-R&P', ['RolesData' => $RolesData, 'PermissionsData' => $PermissionsData, 'RolesName' => $RolesName, 'ActionMenu' => $ActionMenu]);
        
    }


    public function RolesStore(Request $request) {
        $request->validate([
            'Roles_Name' => 'required',
            'Roles_Status' => 'required',
            'Roles_CreatedBy' => 'required',
        ]);
         // dd($request->all());
          $roles = new RolesModel;
          $roles->Role = $request ->Roles_Name;
          $roles->status = $request ->Roles_Status;
          $roles->CreatedBy = $request ->Roles_CreatedBy;

          $roles->save();
          return back()->with('message', 'New Roles Created successfully!');

   }

   public function RolesUpdate(Request $request, $id){

    //dd($request->all());
    $request->validate([
        'role_name' => 'required',
        'role_createdby' => 'required',
        'edit_role_status' => 'required',
    ]);
    

     DB::table('roles')
        ->where('Id', $id)
        ->update(['Role' => $request ->role_name, 'CreatedBy' => $request ->role_createdby, 'status' => $request ->edit_role_status ]);
        

    return back()->with('message', 'Roles Updated successfully!');
    
    }

    public function RolesStatusUpdate(Request $request, $id){
        RolesModel::where('Id', $id)
        ->update(['status' => $request->Roles_Status]);
        return back()->with('message', 'Roles Status Updated successfully!');
    }

    public function RolesDestroy($id){ 

        $Roles = DB::table('roles')->where('Id', $id)->first();
    
        if ($Roles) {
            $name = $Roles->Role;
            
            DB::table('roles')->where('Id', $id)->delete();

            return back()->with('message', $name . ' Roles deleted!');
        }
        return back()->with('error', 'Roles not found!');
        
    }

    public function PermissionsStore(Request $request) {
        $request->validate([
            'action_menu' => 'required',
            'Permissions_name' => 'required|unique:permissions,permission',
            'Permissions_status' => 'required',
            'Permissions_createdBy' => 'required',
        ]);
    
        $permissions = new PermissionsModel;
        $permissions->action_menu = $request->action_menu;
        $permissions->permission = $request->Permissions_name;
        $permissions->status = $request->Permissions_status;
        $permissions->CreatedBy = $request->Permissions_createdBy;
    
        $permissions->save();
        return back()->with('message', 'New Permission Created successfully!');
    }
    
    public function PermissionsUpdate(Request $request, $id) {
        $request->validate([
            'edit_action_menu' => 'required',
            'edit_permission_name' => 'required',
            'edit_permission_createdby' => 'required',
            'edit_permission_status' => 'required',
        ]);
    
        DB::table('permissions')
            ->where('Id', $id)
            ->update([
                'action_menu' => $request->edit_action_menu,
                'permission' => $request->edit_permission_name,
                'CreatedBy' => $request->edit_permission_createdby,
                'status' => $request->edit_permission_status
            ]);
    
        return back()->with('message', 'Permission Updated successfully!');
    }
    
    public function PermissionsStatusUpdate(Request $request, $id) {
        PermissionsModel::where('Id', $id)
            ->update(['status' => $request->Permissions_Status]);
        
        return back()->with('message', 'Permission Status Updated successfully!');
    }
    
    public function PermissionsDestroy($id) {
        $permission = DB::table('permissions')->where('Id', $id)->first();
    
        if ($permission) {
            $name = $permission->permission;
            
            DB::table('permissions')->where('Id', $id)->delete();
    
            return back()->with('message', $name . ' Permission deleted!');
        }
    
        return back()->with('error', 'Permission not found!');
    }
    
}
