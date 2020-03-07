@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('staff.update', $staff->id)}}" class="user" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="user" name="name" value="{{$staff->name}}" class="form-control form-control-user" id="exampleInputName" placeholder="Employee Name" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="email" name="email" value="{{$staff->email}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="phone" name="phone" value="{{$staff->phone}}" class="form-control form-control-user" id="exampleInputPhone" placeholder="Phone Number" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="number" name="id_no" value="{{$staff->id_no}}" class="form-control form-control-user" id="exampleInputIdNumber" placeholder="ID Number" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="number" name="employee_no" value="{{$staff->employee_no}}" class="form-control form-control-user" id="exampleInputEmployeeNo" placeholder="Employee Number" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="location" value="{{$staff->location}}" class="form-control form-control-user" id="exampleInputLocation" placeholder="Location" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <select type="gender" name="gender" value="--chose gender--" class="form-control-user" id="exampleInputGender" required>
                          <option>Male</option>
                          <option>Female</option>
                        </select>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="position" value="{{$staff->position}}" class="form-control form-control-user" id="exampleInputRole" placeholder="Role" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="file" name="image" value="{{$staff->image}}" class="form-control form-control-user" id="exampleInputImage" placeholder="Email Address"
                      onchange="return imageval()" required>
                    </div>
                    <button type="submit" class="btn btn-warning btn-user btn-block">
                      Update
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