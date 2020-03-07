@extends('layouts.master')
@section('master')
            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center justify-content-between mb-4">
                  <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                <a href="{{url('Admin/Setting/settings')}}" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-wrench fa-sm text-white-50"></i> Main Settings</a>
                </div>
      
                <!-- Content Row -->
                <div class="row">
      
                  <!-- Current System Users-->
                  <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                      <div class="card-body">
                        <div class="row no-gutters align-items-center">
                          <div class="col mr-2">
                          <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('Admin/User/system_users')}}">View users</a></div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">({{$system_users_count}})system users</div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('Admin/Customer/customers')}}">view Customer</a></div>
                          <div class="h5 mb-0 font-weight-bold text-gray-800">({{$customers_count}}) clients</div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('Admin/Service/services')}}">view services</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{$services_count }})services</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-cogs fa-2x text-gray-300"></i>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('Admin/Staff_Member/staff')}}">view Staff</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{$staff_count}}) employees</div>
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
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('Admin/Notification/notifications')}}">view Notifications</a></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">({{$notifications_count}}) messages</div>
                          </div>
                          <div class="col-auto">
                            <i class="fas fa-comments fa-2x text-gray-300"></i>
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
                                              <div class="text-xs font-weight-bold text-info text-uppercase mb-1"><a href="{{url('Admin/Project/projects')}}">view Projects</a></div>
                                              <div class="h5 mb-0 font-weight-bold text-gray-800">({{$projects_count}})Projects</div>
                                            </div>
                                            <div class="col-auto">
                                              <i class="fas fa-briefcase fa-2x text-gray-300"></i>
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