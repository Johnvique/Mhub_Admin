@extends('layouts.master')
@section('master')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="{{url('admin/settings')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-cogs fa-sm text-white-50"></i> System Settings</a>
                </div>
      
                <!-- Content Row -->
                <div class="row">
      
                  <!-- Current System Users-->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('admin/users')}}">System Users</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">(2) Users</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
      
                  <!-- Currently Available Clients -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('admin/customers')}}">Available Clients</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">(74) customers</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-user-plus fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Products and Services We Offer -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('admin/services')}}">Services Offered</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">(13) services</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-wrench fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
      
                  <!-- Registered Staff Members -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('admin/staff')}}">Registered Staff</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">(10) members</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-users fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Inquiries Made -->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('admin/inquiries')}}">Pending Inquiries</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">(28) inquiries</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                </div>
      
                <!-- Content Row -->
      
                <div class="row">
      

      

                </div>
      
                <!-- Content Row -->
                <div class="row">
      
                  <!-- Content Column -->
                  <div class="col-lg-6 mb-4">
      
    
      
                  </div>
      
                  <div class="col-lg-6 mb-4">
      

                  </div>
                </div>
      
              </div>
              <!-- /.container-fluid -->
      
            </div>
            <!-- End of Main Content -->
@endsection