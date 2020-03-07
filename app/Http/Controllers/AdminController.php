<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customers;
use App\Services;
use App\System_users;
use App\Staff;
use App\Notifications;
use App\Projects;

class AdminController extends Controller
{
    //
    public function index(){
        $customers_count = Customers::count();
        $services_count = Services::count();
        $system_users_count = System_users::count();
        $staff_count = Staff::count();
        $notifications_count = Notifications::count();
        $projects_count = Projects::count();
        return view('Admin/index',compact('customers_count','services_count','system_users_count',
        'staff_count','notifications_count','projects_count'));
    }
}
