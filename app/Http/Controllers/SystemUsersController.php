<?php

namespace App\Http\Controllers;
use File;
use App\System_users;
use Illuminate\Http\Request;

class SystemUsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $system_users = System_users::all();
        return view('Admin/User/system_users',compact('system_users'));
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
        if ($request->hasFile('image')) {
            $filenameWithExt = $request->file('image')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('image')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('image')->move(public_path('album'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.jpg';
        }


        $system_user = new System_users;
        $system_user->username=$request->get('username');
        $system_user->email=$request->get('email');
        $system_user->phone=$request->get('phone');
        $system_user->image=$fileNameToStore;
        $system_user->password=$request->get('password');

        $system_user->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\System_users  $system_users
     * @return \Illuminate\Http\Response
     */
    public function show(System_users $system_users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\System_users  $system_users
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $system_user = System_users::find($id);
        return view('Admin/User/edit',compact('system_user'));

        return redirect('User/system_users');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\System_users  $system_users
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $system_user = System_users::find($id);
        $system_user->update([
            'username'=>$request->username,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'image'=>$request->image,
            'password'=>$request->password,
        ]);

        return redirect('User/system_users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\System_users  $system_users
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $system_user = System_users::find($id);
        file::delete('album/'.$system_user->image);
        $system_user->delete(); 

        return redirect('User/system_users');
    }
}
