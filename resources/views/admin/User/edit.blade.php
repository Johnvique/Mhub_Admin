@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
                <form action="{{route('system_users.update', $system_user->id)}}" class="user" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="user" name="username" value="{{$system_user->username}}" class="form-control form-control-user" id="exampleUsername" placeholder="User Name" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="email" name="email" value="{{$system_user->email}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Adress" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="phone" name="phone" value="{{$system_user->phone}}" class="form-control form-control-user" id="exampleInputPhone" placeholder="Phone number" required>
                        </div>
                        <div class="col-sm-6">
                          <input type="file" name="image" value="{{$system_user->image}}" class="form-control form-control-user" id="exampleInputImage" placeholder="upload image"
                          onchange="return imageval()" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="col-sm-6 mb-3 mb-sm-0">
                          <input type="password" name="password" value="{{$system_user->password}}" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" required>
                        </div>
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