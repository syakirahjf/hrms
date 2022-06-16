<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Leave;
use App\Models\Employee;
use DB;

class LeaveController extends Controller
{
    public function index(){
        $leaveData = Leave::join('employees','employees.emp_id', '=', 'leaves.emp_id')
        ->get(['employees.emp_name','leaves.*']);
        return view('leave.showAppList',compact('leaveData'));
    }

    public function showLeaveApp($id){
        $leaves = Leave::find($id);
        $leave = Employee::join('leaves','leaves.emp_id', '=', 'employees.emp_id')
        ->where('leaves.leave_id', "=" ,$leaves->leave_id)
        ->first(['employees.*','leaves.*']);
        return view('leave.showLeaveApp',compact('leave'));
    }

    public function deleteLeaveApp($id){
        $leaveData = Leave::find($id);
        $leaveData->delete();
        return redirect('showAppList')->with('success','Application has been deleted!');
    }

    public function updateAppStatusApprove($id){
        $leave = Leave::find($id);
        $leave->status = "Approved";
        $leave->update();
        return redirect('showAppList')->with('success','Status Updated Successfully');
    }

    public function undo($id){
        $leave = Leave::find($id);
        $leave->status = "Pending";
        $leave->update();
        return redirect('showAppList')->with('success','Status Updated Successfully');
    }

    public function updateAppStatusDecline($id){
        $leave = Leave::find($id);
        $leave->status = "Declined";
        $leave->update();
        return redirect('showAppList')->with('success','Status Updated Successfully');
    }

    public function applyLeave(){

        $leaveApp = Leave::get(['leaves.*']);
        return view('employee.applyLeave',compact('leaveApp'));
    }

    public function newApply(Request $request)
    {
        $request->validate([

            'emp_id'=>'required',
            'startdate'=>'required',
            'enddate'=>'required',
            'leave_type'=>'required',
            'id',
            'leaveid',
            //'status'=>'required'
        ]);

        $query = DB::table('leaves')->insert([

            'emp_id'=>$request->input('emp_id'),
            'startdate'=>$request->input('startdate'),
            'enddate'=>$request->input('enddate'),
            'leave_type'=>$request->input('leave_type'),
            'id'=>$request->input('id'),
            'leave_id'=>$request->input('leaveid'),
            //'status'=>$request->input('status')
        ]);


        if($query){
            return back()->with("success", "Data have been successfully inserted!");
        }else{
            return back()->with("fail", "Something went wrong");
        }
    }

    public function cancelleaveApp($leave_id){
        $leaveCancel = Leave::find($leave_id);
        $leaveCancel->status = "Cancelled";
        $leave->update();
        return redirect('employee_leaveList')->with('success','Manage to cancel your application');
    }

    public function employee_leaveList(){

        $leaveList = Leave::get(['leaves.*']);
        return view('employee.employee_leaveList',compact('leaveList'));
    }
}
