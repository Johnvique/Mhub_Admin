@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('settings.update', $setting->id)}}" class="user" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="business_name" value="{{$setting->business_name}}" class="form-control form-control-user" id="exampleInputName" placeholder="Business Name" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="address" name="box_address" value="{{$setting->box_address}}" class="form-control form-control-user" id="exampleInputAddress" placeholder="Box Address" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="location" name="location" value="{{$setting->location}}" class="form-control form-control-user" id="exampleInputLocation" placeholder="Business Location" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="text" name="vision" value="{{$setting->vision}}" class="form-control form-control-user" id="exampleInputVision" placeholder="Vision statement" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="mission" value="{{$setting->mission}}" class="form-control form-control-user" id="exampleInputMission" placeholder="Mission statement" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="file" name="logo" value="{{ $setting->logo ?? ''}}" class="form-control form-control-user" id="exampleImage" placeholder="upload image"
                        onchange="return imageval()" required>
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