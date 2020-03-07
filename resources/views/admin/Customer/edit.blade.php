@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('customers.update', $customer->id)}}" class="user" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="user" name="name" value="{{$customer->name}}" class="form-control form-control-user" id="exampleInputName" placeholder="Enter Your Name" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="email" name="email" value="{{$customer->email}}" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Adress" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="phone" name="phone" value="{{$customer->phone}}" class="form-control form-control-user" id="exampleInputPhone" placeholder="phone number" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="location" name="location" value="{{$customer->location}}" class="form-control form-control-user" id="exampleInputLocation" placeholder="Your Location" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="textarea" name="message" value="{{$customer->message}}" class="form-control form-control-user" id="exampleInputMessage" placeholder="Enter Message" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="file" name="image" value="{{$customer->image}}" class="form-control form-control-user" id="exampleInsertImage" placeholder="upload your image"
                        onchange="return imagval()" required>
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