<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Department;
use App\Models\Employee;

class MasterController extends Controller
{
    public function index(){
        $leaveData = Leave::count();
        $departmentData = Department::count();
        $empData = Employee::count();
        return view('dashboard.dashboardAdmin', compact('leaveData','departmentData', 'empData'));
    }
//     public function AdminDashboard(){
//         $leaveData = Leave::count();
//         $departmentData = Department::count();
//         $empData = Employee::count();
//         return view('dashboard.dashboardAdmin', compact('leaveData','departmentData', 'empData'));
//     }

//     public function ManagerDashboard(){
//         $leaveData = Leave::count();
//         $departmentData = Department::count();
//         $empData = Employee::count();
//         return view('dashboard.dashboardManager', compact('leaveData','departmentData', 'empData'));
//     }
}
