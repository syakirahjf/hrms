<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Employee;
use App\Models\Department;
use DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employeeData = Employee::join('departments','employees.dept_id', '=', 'departments.dept_id')
        ->join('leaves','employees.emp_id', '=', 'leaves.emp_id','left outer')
        ->get(['employees.*','leaves.*','departments.*','employees.emp_id']);
        return view('department.employeeAttendance',compact('employeeData'));
    }

    public function employeeList()
    {
        $employeeData = Department::join('employees','employees.dept_id', '=', 'departments.dept_id')
        ->get(['employees.*','departments.*','employees.id']);
        return view('department.employeeList',compact('employeeData'));
    }

    public function employeeProfile()
    {

        $employeeData = Employee::join('departments','employees.dept_id', '=', 'departments.dept_id')
        ->get(['employees.*','departments.*']);
        return view('employee.employeeProfile',compact('employeeData'));
    }
    public function getName()
    {
        $employeeData = Employee::get(['employees.*']);

        return view('layouts.employee',compact('employeeData'));
    }

    public function addemployee()
    {
        return view('employee.addemployee');
    }

    public function insert(Request $request)
    {
        $request->validate([
            'emp_id'=>'required',
            'emp_name'=>'required',
            'icno'=>'required',
            'gender'=>'required',
            'birthdate'=>'required',
            'race'=>'required',
            'address'=>'required',
            'phoneno'=>'required',
            'email'=>'required |email|unique:employees',
            'dept_id'=>'required',
            'emp_position'=>'required',
            'joindate'=>'required',
            'bankname'=>'required',
            'accbank'=>'required',
        ]);

        $query = DB::table('employees')->insert([

            'emp_id'=>$request->input('emp_id'),
            'emp_name'=>$request->input('emp_name'),
            'icno'=>$request->input('icno'),
            'gender'=>$request->input('gender'),
            'birthdate'=>$request->input('birthdate'),
            'race'=>$request->input('race'),
            'address'=>$request->input('address'),
            'phoneno'=>$request->input('phoneno'),
            'email'=>$request->input('email'),
            'dept_id'=>$request->input('dept_id'),
            'emp_position'=>$request->input('emp_position'),
            'joindate'=>$request->input('joindate'),
            'bankname'=>$request->input('bankname'),
            'accbank'=>$request->input('accbank'),
        ]);


        if($query){
            return back()->with("success", "Data have been successfully inserted!");
        }else{
            return back()->with("fail", "Something went wrong");
        }
    }

    public function editemployee($id)
    {
        $employeeData = Employee::find($id);
        return view('employee.editemployee', compact('employeeData'));
    }

    public function update(Request $request, $id)
    {
        $employeeData = Employee::find($id);
        $employeeData ->emp_id = $request->input('emp_id');
        $employeeData ->emp_name = $request->input('emp_name');
        $employeeData ->icno = $request->input('icno');
        $employeeData ->gender = $request->input('gender');
        $employeeData ->birthdate = $request->input('birthdate');
        $employeeData ->race = $request->input('race');
        $employeeData ->address = $request->input('address');
        $employeeData ->phoneno = $request->input('phoneno');
        $employeeData ->email = $request->input('email');
        $employeeData ->dept_id = $request->input('dept_id');
        $employeeData ->emp_position = $request->input('emp_position');
        $employeeData ->bankname = $request->input('bankname');
        $employeeData ->accbank = $request->input('accbank');
        $employeeData -> update();
        return redirect('employeeList')->with("status", "Application has been updated!");
     }

     public function deleteemployee($id){
        $employeeData = Employee::find($id);
        $employeeData->delete();
        return redirect('employeeList')->with('success','Application has been deleted!');
    }

    public function deleteMarDept($id){
        $employeeData =Employee::where('id',$id)->first();

        if ($employeeData != null) {
            $employeeData->delete();
            return redirect()->route('empMarketing')->with(['message'=> 'Successfully deleted!!']);
        }

        return redirect()->route('empMarketing')->with(['message'=> 'tak deleted!!']);
    }

    public function deleteFinDept($id){
        $employeeData = Employee::find($id);
        $employeeData->delete();
        return redirect('empFinance')->with('success','Application has been deleted!');
    }

    public function deleteHRDept($id){
        $employeeData = Employee::find($id);
        $employeeData->delete();
        return redirect('empHR')->with('success','Application has been deleted!');
    }

    public function deleteITDept($id){
        $employeeData = Employee::find($id);
        $employeeData->delete();
        return redirect('empIT')->with('success','Application has been deleted!');
    }

    public function deleteOMDept($id){
        $employeeData = Employee::find($id);
        $employeeData->delete();
        return redirect('empOM')->with('success','Application has been deleted!');
    }
}
