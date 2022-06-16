<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Department;

class DepartmentController extends Controller
{
     public function index()
    {
        return view('department.departmentList');
    }

    public function indexMarketing()
    {
        $employeeData = Department::join('employees','employees.dept_id', '=', 'departments.dept_id')
        ->where('employees.dept_id','10001')
        ->get(['employees.*','departments.*']);
        return view('department.empMarketing',compact('employeeData'));
    }

    public function indexFinance()
    {
        $employeeData = Department::join('employees','employees.dept_id', '=', 'departments.dept_id')
        ->where('employees.dept_id','10002')
        ->get(['employees.*','departments.*']);
        return view('department.empFinance',compact('employeeData'));
    }

    public function indexHR()
    {
        $employeeData = Department::join('employees','employees.dept_id', '=', 'departments.dept_id')
        ->where('employees.dept_id','10003')
        ->get(['employees.*','departments.*']);
        return view('department.empHR',compact('employeeData'));
    }

    public function indexIT()
    {
        $employeeData = Department::join('employees','employees.dept_id', '=', 'departments.dept_id')
        ->where('employees.dept_id','10005')
        ->get(['employees.*','departments.*']);
        return view('department.empIT',compact('employeeData'));
    }

    public function indexOM()
    {
        $employeeData = Department::join('employees','employees.dept_id', '=', 'departments.dept_id')
        ->where('employees.dept_id','10004')
        ->get(['employees.*','departments.*']);
        return view('department.empOM',compact('employeeData'));
    }
}
