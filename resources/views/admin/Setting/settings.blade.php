@extends('layouts.master')
@section('master')
<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
        <i class="fa fa-cogs" aria-hidden="true"></i>
  system settings
  </button>
        </div>
    </div>
</div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title bg-lg text-black" id="exampleModalLabel">Input The Organizational settings</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="card">
            <div class="card-body">
            <form action="{{route('settings.store')}}" class="user" method="POST" enctype="multipart/form-data">
              @csrf
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="business_name" class="form-control form-control-user" id="exampleInputName" placeholder="Business Name" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="address" name="box_address" class="form-control form-control-user" id="exampleInputAddress" placeholder="Box Address" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="location" name="location" class="form-control form-control-user" id="exampleInputLocation" placeholder="Business Location" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="text" name="vision" class="form-control form-control-user" id="exampleInputVision" placeholder="Vision statement" required>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" name="mission" class="form-control form-control-user" id="exampleInputMission" placeholder="Mission statement" required>
                  </div>
                  <div class="col-sm-6">
                    <input type="file" name="logo" value="{{ $setting->logo ?? ''}}" class="form-control form-control-user" id="exampleImage" placeholder="upload image"
                    onchange="return imageval()" required>
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
              <h6 class="m-0 font-weight-bold text-white">Manage The Organizational settings Here</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Business Name</th>
                      <th>Box Address</th>
                      <th>Location</th>
                      <th>Vision</th>
                      <th>Mission</th>
                      <th>Logo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>#</th>
                      <th>Business Name</th>
                      <th>Box Address</th>
                      <th>Location</th>
                      <th>Vision</th>
                      <th>Mission</th>
                      <th>Logo</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    @foreach ($settings as $setting)
                    <tr>
                      <td>{{$setting->id}}</td>
                      <td>{{$setting->business_name}}</td>
                      <td>{{$setting->box_address}}</td>
                      <td>{{$setting->location}}</td>
                      <td>{{$setting->vision}}</td>
                      <td>{{$setting->mission}}</td>
                      <td><img src="{{asset('album/'.$setting->logo)}}" alt="img-responsive" style="width:60px"></td>
                      <td>
                      <a href="{{action('SettingsController@edit', $setting->id)}}" class="btn btn-success fa fa-edit btn-sm"></a>
                      <form action="{{action('SettingsController@destroy', $setting->id)}}" method="POST">
                        @csrf
                        <button class="btn btn-danger fa fa-trash-alt btn-sm"></button>
                        <input type="hidden" name="_method" value="DELETE">
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