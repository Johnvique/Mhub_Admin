<?php

namespace App\Http\Controllers;

use App\Permissions;
use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $permissions = Permissions::all();
        return view('Admin/Permission/permissions',compact('permissions'));
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
        $permission = new Permissions;
        $permission->display_name=$request->get('display_name');
        $permission->description=$request->get('description'); 

        $permission->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function show(Permissions $permissions)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $permission = Permissions::find($id);
        return view('Admin/Permission/edit',compact('permission'));

        return redirect('Permission/permissions');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $permission = Permissions::find($id);
        $permission->update([
            'display_name'=>$request->display_name,
            'description'=>$request->description,
        ]);

        return redirect('Permission/permissions');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Permissions  $permissions
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $permission = Permissions::find($id);
        $permission->delete();

        return redirect('Permission/permissions');
    }
}
