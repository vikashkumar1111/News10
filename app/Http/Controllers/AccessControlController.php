<?php

namespace App\Http\Controllers;

use App\Models\AccessControl;
use Illuminate\Http\Request;

class AccessControlController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showData()
    {
        
        $AccessControl = AccessControl::orderBy('id', 'asc')->get();
        return view('admin.V-R&P',['AccessData' => $AccessControl]);
       
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
        //dd($request->all());
        $roles = $request->input('roles');
        $permissions = $request->input('permission');
        $permissionString = implode(',', $permissions);
        $AccessControl = new AccessControl;
        $AccessControl->roles = $roles;
        $AccessControl->access_permission = $permissionString;

        $AccessControl->save();
          return back()->with('message', 'New Roles Created successfully!');

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
        
        //dd($request->all());

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
