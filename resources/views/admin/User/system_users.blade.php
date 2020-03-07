@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add users
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
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Manage Users</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('system_users.store',)}}" class="user" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="user" name="username" class="form-control form-control-user" id="exampleUsername" placeholder="User Name" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Adress" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="phone" name="phone" class="form-control form-control-user" id="exampleInputPhone" placeholder="Phone number" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="file" name="image" class="form-control form-control-user" id="exampleInputImage" placeholder="upload image"
                    onchange="return imageval()" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                  </div>
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
              <h6 class="m-0 font-weight-bold text-white">Manage System users Here</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Username</th>
                      <th>Email</th>
                      <th>Phone</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($system_users as $system_user)
                    <tr>
                    <td>{{$system_user->id}}</td>
                      <td>{{$system_user->username}}</td>
                      <td>{{$system_user->email}}</td>
                      <td>{{$system_user->phone}}</td>
                      <td>
                      <img src="{{asset('album/'.$system_user->image)}}" alt="img-responsive" style="width:60px">
                      </td>
                      <td>
                      <a href="{{action('SystemUsersController@edit', $system_user->id)}}" class="btn btn-success fa fa-edit btn-sm"></a>
                      <form action="{{action('SystemUsersController@destroy', $system_user->id)}}" method="POST">
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