<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Department;
use App\Models\Employee;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

     //function index represent user other than admin eg. employee
    public function index()
    {
        $leaveData = Leave::count();
        $departmentData = Department::count();
        $empData = Employee::count();
        return view('home', compact('leaveData','departmentData', 'empData'));
    }

    //function adminHome represent admin user
    public function adminHome(){
        $leaveData = Leave::count();
        $departmentData = Department::count();
        $empData = Employee::count();
        return view('adminHome', compact('leaveData','departmentData', 'empData'));
    }
}
