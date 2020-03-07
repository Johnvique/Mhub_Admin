<?php

namespace App\Http\Controllers;
use File;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $staffs = Staff::all();
        return view('Admin/Staff_Member/staff',compact('staffs'));
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


        $staff = new Staff;
        $staff->name=$request->get('name');
        $staff->email=$request->get('email');
        $staff->phone=$request->get('phone');
        $staff->id_no=$request->get('id_no');
        $staff->employee_no=$request->get('employee_no');
        $staff->location=$request->get('location');
        $staff->gender=$request->get('gender');
        $staff->position=$request->get('position');
        $staff->image=$fileNameToStore;

        $staff->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Staff $staff)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $staff = Staff::find($id);
        return view('Admin/Staff_Member/edit',compact('staff'));

        return redirect('Staff_Member/staff');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $staff=Staff::find($id);
        $staff->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_no'=>$request->id_no,
            'employee_no'=>$request->employee_no,
            'location'=>$request->location,
            'gender'=>$request->gender,
            'position'=>$request->position,
            'image'=>$request->image,
        ]);

        return redirect('Staff_Member/staff');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Staff  $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $staff =Staff::find($id);
        file::delete('album/'.$staff->image);
        $staff->delete();

        return redirect('Staff_Member/staff');
    }
}
