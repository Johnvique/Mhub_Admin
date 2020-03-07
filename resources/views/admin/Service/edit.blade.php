@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('services.update', $service->id)}}" class="user" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="user" name="name" value="{{$service->name}}" class="form-control form-control-user" id="exampleInputName" placeholder="Service Name" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="description" value="{{$service->description}}" class="form-control form-control-user" id="exampleInputDescription" placeholder="About Service" required>
                      </div>
                    </div>
                    <div class="form-group">
                      <input type="number" name="price" value="{{$service->price}}" class="form-control form-control-user" id="exampleInputPrice" placeholder="Service Charge" required>
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