<?php

namespace App\Http\Controllers;
use File;
use App\Settings;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $settings = Settings::all();
        return view('Admin/Setting/settings',compact('settings'));
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
        if ($request->hasFile('logo')) {
            $filenameWithExt = $request->file('logo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('logo')->getClientOriginalExtension();
            $fileNameToStore = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('logo')->move(public_path('album'), $fileNameToStore);
        } else {
            $fileNameToStore = 'default.jpg';
        }


        $setting = new Settings;
        $setting->business_name=$request->get('business_name');
        $setting->box_address=$request->get('box_address');
        $setting->location=$request->get('location');
        $setting->vision=$request->get('vision');
        $setting->mission=$request->get('mission');
        $setting->logo=$fileNameToStore;

        $setting->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $setting = Settings::find($id);
        return view('Admin/Setting/edit',compact('setting'));

        return redirect('Setting/settings');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $setting = Settings::find($id);
        $setting->update([
            'business_name'=>$request->business_name,
            'box_address'=>$request->box_address,
            'location'=>$request->location,
            'vision'=>$request->vision,
            'mission'=>$request->mission,
            'logo'=>$request->logo,
        ]);
        return redirect('Setting/settings');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $setting = Settings::find($id);
        file::delete('album/'.$setting->logo);
        $setting->delete();

        return redirect('Setting/settings');
    }
}
