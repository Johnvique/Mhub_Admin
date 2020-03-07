@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-plus-square" aria-hidden="true"></i>
  Add notice
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
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Make a Notice</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('notifications.store')}}" method="POST" class="user">
              @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="user" name="sender" class="form-control form-control-user"  id="exampleSender" placeholder="Name of the sender" required>
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
                    <input type="date" name="date" class="form-control form-control-user" id="exampleInputDate" placeholder="Date of Notice" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="textarea" name="message" class="form-control form-control-user" id="exampleInputMessage" placeholder="Message" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="purpose" class="form-control form-control-user" id="exampleInputPurpose" placeholder="Message Purpose" required>
                  </div>
                  <div class="col-sm-6">
                    <select type="text" name="status" value="--chose message Status--" class="form-control-user" id="exampleInputStatus" required>
                      <option>pending</option>
                      <option>read</option>
                      <option>replied</option>
                    </select>
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
              <h6 class="m-0 font-weight-bold text-white">Manage Notifications</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Sender</th>
                      <th>Notice Type</th>
                      <th>Date</th>
                      <th>Message</th>
                      <th>Purpose</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Sender</th>
                      <th>Notice Type</th>
                      <th>Date</th>
                      <th>Message</th>
                      <th>Purpose</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($notifications as $notification)
                    <tr>
                    <td>{{$notification->id}}</td>
                      <td>{{$notification->sender}}</td>
                      <td>{{$notification->notice_category}}</td>
                      <td>{{$notification->date}}</td>
                      <td>{{$notification->message}}</td>
                      <td>{{$notification->purpose}}</td>
                      <td>{{$notification->status}}</td>
                      <td>
                      <a href="{{action('NotificationsController@edit', $notification)}}" class="btn btn-success fa fa-edit btn-sm"></a>
                      <form action="{{action('NotificationsController@destroy', $notification->id)}}" method="POST">
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