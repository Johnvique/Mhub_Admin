<?php

namespace App\Http\Controllers;

use App\Projects;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects = Projects::all();
        return view('Admin/Project/projects',compact('projects'));
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
        $project = new Projects;
        $project->title=$request->get('title');
        $project->description=$request->get('description');
        $project->category=$request->get('category');
        $project->phone=$request->get('phone');
        $project->assigned_date=$request->get('assigned_date');
        $project->due_date=$request->get('due_date');
        $project->charge=$request->get('charge');

        $project->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function show(Projects $projects)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $project = Projects::find($id);
        return view('Admin/Project/edit',compact('project'));

        return redirect('Project/projects');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $project = Projects::find($id);
        $project->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'category'=>$request->category,
            'phone'=>$request->phone,
            'assigned_date'=>$request->assigned_date,
            'due_date'=>$request->due_date,
            'charge'=>$request->charge,
        ]);
            return redirect('Project/projects');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Projects  $projects
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $project = Projects::find($id);
        $project->delete();

        return redirect('Project/projects');
    }
}
