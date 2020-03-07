@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add staff
  </button>
  <button type="button" class="btn btn-success">
    <i class="fa fa-file-excel" aria-hidden="true"></i>
  CSV
  </button>
  <button type="button" class="btn btn-danger">
      <i class="fa fa-file-pdf" aria-hidden="true"></i>
    PDF
    </button>
    <button type="button" class="btn btn-secondary">
      <i class="fa fa-print" aria-hidden="true"></i>
    print
    </button>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Staff</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('staff.store')}}" method="POST" class="user" enctype="multipart/form-data">
              @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="user" name="name" class="form-control form-control-user" id="exampleInputName" placeholder="Employee Name" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="phone" class="form-control form-control-user" id="exampleInputPhone" placeholder="Phone Number" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="number" name="id_no" class="form-control form-control-user" id="exampleInputIdNumber" placeholder="ID Number" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="employee_no" class="form-control form-control-user" id="exampleInputEmployeeNo" placeholder="Employee Number" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="location" class="form-control form-control-user" id="exampleInputLocation" placeholder="Location" required>
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
                    <input type="text" name="position" class="form-control form-control-user" id="exampleInputRole" placeholder="Role" required>
                  </div>
                </div>
                <div class="form-group">
                  <input type="file" name="image" class="form-control form-control-user" id="exampleInputImage" placeholder="Email Address"
                  onchange="return imageval()" required>
                </div>
                <button type="submit" class="btn btn-primary btn-user btn-block">
                  Submit
                </button>
              </form>
            </div>
          </div>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>
  </div>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3 bg-primary">
              <h6 class="m-0 font-weight-bold text-white">Manage Staff Members Here</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>ID Number</th>
                      <th>Employee Number</th>
                      <th>Location</th>
                      <th>Gender</th>
                      <th>Position</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>ID Number</th>
                      <th>Employee Number</th>
                      <th>Location</th>
                      <th>Gender</th>
                      <th>Position</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($staffs as $staff)
                    <tr>
                    <td>{{$staff->id}}</td>
                      <td>{{$staff->name}}</td>
                      <td>{{$staff->email}}</td>
                      <td>+{{$staff->phone}}</td>
                      <td>{{$staff->id_no}}</td>
                      <td>{{$staff->employee_no}}</td>
                      <td>{{$staff->location}}</td>
                      <td>{{$staff->gender}}</td>
                      <td>{{$staff->position}}</td>
                      <td>
                      <img src="{{asset('album/'.$staff->image)}}" alt="img-responsive" style="width:60px">
                      </td>
                      <td>
                      <a href="{{action('StaffController@edit', $staff->id)}}" class="btn btn-success fa fa-edit btn-sm"></a>
                      <form action="{{action('StaffController@destroy', $staff->id)}}" method="POST">
                        @csrf
                        <input type="hidden" name="_method" value="DELETE">
                          <button class="btn btn-danger fa fa-trash-alt btn-sm"></button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
<!-- /.datatables -->
@endsection