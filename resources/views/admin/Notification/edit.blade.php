@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
          <div class="card">
              <div class="card-body">
              <form action="{{route('notifications.update', $notification->id)}}" method="POST" class="user">
                @csrf
                @method('PUT')
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="user" name="sender" value="{{$notification->sender}}" class="form-control form-control-user"  id="exampleSender" placeholder="Name of the sender" required>
                      </div>
                      <div class="col-sm-6">
                        <select type="text" name="notice_category" value="--chose category--" class="form-control-user" id="exampleInputCategory" required>
                          <option>Question</option>
                          <option>Suggestion</option>
                          <option>Quotation</option>
                          <option>Inquiry</option>
                          <option>Help</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="date" name="date" value="{{$notification->date}}" class="form-control form-control-user" id="exampleInputDate" placeholder="Date of Notice" required>
                      </div>
                      <div class="col-sm-6">
                        <input type="textarea" name="message" value="{{$notification->message}}" class="form-control form-control-user" id="exampleInputMessage" placeholder="Message" required>
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-6 mb-3 mb-sm-0">
                        <input type="text" name="purpose" value="{{$notification->purpose}}" class="form-control form-control-user" id="exampleInputPurpose" placeholder="Message Purpose" required>
                      </div>
                      <div class="col-sm-6">
                        <select type="text" name="status" value="--chose message Status--" class="form-control-user" id="exampleInputStatus" required>
                          <option>pending</option>
                          <option>read</option>
                          <option>replied</option>
                        </select>
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