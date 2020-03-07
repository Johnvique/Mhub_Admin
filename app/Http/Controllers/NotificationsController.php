<?php

namespace App\Http\Controllers;

use App\Notifications;
use Illuminate\Http\Request;

class NotificationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $notifications = Notifications::all();
        return view('Admin/Notification/notifications',compact('notifications'));
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
        $notification = new Notifications;
        $notification->sender=$request->get('sender');
        $notification->notice_category=$request->get('notice_category');
        $notification->date=$request->get('date');
        $notification->message=$request->get('message');
        $notification->purpose=$request->get('purpose');
        $notification->status=$request->get('status');

        $notification->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function show(Notifications $notifications)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $notification = Notifications::find($id);
        return view('Admin/Notification/edit',compact('notification'));

        return redirect('Notification/notifications');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $notification=Notifications::find($id);
        $notification->update([
            'sender'=>$request->sender,
            'notice_category'=>$request->notice_category,
            'date'=>$request->date,
            'message'=>$request->message,
            'purpose'=>$request->purpose,
            'status'=>$request->status,
        ]);

        return redirect('Notification/notifications');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Notifications  $notifications
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $notification =Notifications::find($id);
        $notification->delete();

        return redirect('Notification/notifications');
    }
}
