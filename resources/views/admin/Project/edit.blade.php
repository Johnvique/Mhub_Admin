@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                <form action="{{route('projects.update', $project->id)}}"class="user" method="POST">
                    @csrf
                    @method('PUT')
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="title" value="{{$project->title}}" class="form-control form-control-user" id="exampleInputTitle" placeholder="Projects Title" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="text" name="description" value="{{$project->description}}" class="form-control form-control-user" id="exampleInputDescription" placeholder="Description" required>
                        </div>
                      </div>
                      <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                              <select type="text" name="category" value="--chose category--" class="form-control" id="exampleCategory" required>
                                  <option>--Project Category--</option>
                                  <option>Web & Web Application</option>
                                  <option>Design & Architecture</option>
                                  <option>Networking & Repair</option>
                                  <option>Training & Consultancy</option>
                                  <option>Research & Data Analysis</option>
                                  <option>Photography</option>
                                </select>
                          </div>
                          <div class="col-sm-6">
                            <input type="phone" name="phone" value="{{$project->phone}}" class="form-control form-control-user" id="exampleInputPhone" placeholder="Phone Contact" required>
                          </div>
                        </div>
                        <div class="form-group row">
                          <div class="col-sm-6 mb-3 mb-sm-0">
                            <input type="date" name="assigned_date" value="{{$project->assigned_date}}" class="form-control form-control-user" id="exampleInputDateAssigned" placeholder="Assigned Date" required>
                          </div>
                          <div class="col-sm-6">
                            <input type="date" name="due_date" value="{{$project->due_date}}" class="form-control form-control-user" id="exampleInputDueDate" placeholder="Due Date" required>
                          </div>
                        </div>
                      <div class="form-group">
                        <input type="price" name="charge" value="{{$project->price}}" class="form-control form-control-user" id="exampleInputPrice" placeholder="Service Charge" required>
                      </div>
                      <button type="submit" class="btn btn-warning btn-user btn-block">
                        Update Project
                      </button>
                    </form>
              </div>
          </div>  
        </div>
        <div class="col-md-4">
            
        </div>
    </div>
</div>
</div>
@endsection