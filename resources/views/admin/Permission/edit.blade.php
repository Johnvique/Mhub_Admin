@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('permissions.update', $permission->id)}}" class="user" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="display_name" value="{{$permission->display_name}}" class="form-control form-control-user" id="examplePermissionName" placeholder="Permission type" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="textarea" name="description" value="{{$permission->description}}" class="form-control form-control-user" id="exampleTextarea" placeholder="Description" required>
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