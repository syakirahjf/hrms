<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\HomeController;
use App\Http\Controllers\LeaveController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\DepartmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//login to different dashboard
Route::get('admin/home', [App\Http\Controllers\HomeController::class, 'adminHome'])->name('admin.home')-> middleware('is_admin');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); //for other user other than admin

//Master
// Route::get('/dashboard', [MasterController::class,'index']);

//Leave Application
Route::get('/showAppList',[LeaveController::class,'index']);
Route::get('/showLeaveApp/{id}',[LeaveController::class, 'showLeaveApp']);
Route::get('/deleteLeaveApp/{id}',[LeaveController::class, 'deleteLeaveApp']);
Route::get('/updateAppStatusApprove/{id}',[LeaveController::class, 'updateAppStatusApprove']);
Route::get('/undo/{id}',[LeaveController::class, 'undo']);
Route::get('/updateAppStatusDecline/{id}',[LeaveController::class, 'updateAppStatusDecline']);
Route::get('/applyLeave',[LeaveController::class,'applyLeave']);
Route::get('/employee_leaveList',[LeaveController::class,'employee_leaveList']);
Route::post('/newApply', [LeaveController::class, 'newApply']);
Route::get('/cancelleaveApp/{id}',[LeaveController::class, 'cancelleaveApp']);

//Employee
Route::get('/employeeAttendance',[EmployeeController::class,'index']);
Route::get('/employeeList',[EmployeeController::class,'employeeList']);
Route::get('/employeeProfile',[EmployeeController::class,'employeeProfile']);
Route::get('/getName',[EmployeeController::class,'getName']);
Route::get('/addemployee',[EmployeeController::class,'addemployee']);
Route::post('/insert',[EmployeeController::class,'insert']);
Route::get('/editemployee/{id}',[EmployeeController::class,'editemployee']);
Route::post('/update/{id}',[EmployeeController::class,'update']);
Route::get('/deleteMarDept/{id}',[EmployeeController::class, 'deleteMarDept']);
Route::get('/deleteHRDept/{id}',[EmployeeController::class, 'deleteHRDept']);
Route::get('/deleteITDept/{id}',[EmployeeController::class, 'deleteITDept']);
Route::get('/deleteOMDept/{id}',[EmployeeController::class, 'deleteOMDept']);
Route::get('/deleteFinDept/{id}',[EmployeeController::class, 'deleteFinDept']);

//Route::post('/update/{id}',[EmployeeController::class,'update']);
Route::put('/update/{id}',[EmployeeController::class,'update']);
Route::get('/deleteemployee/{id}',[EmployeeController::class,'deleteemployee']);


//Input::get()
Route::get('/deleteMarDept/{id}',[EmployeeController::class, 'deleteMarDept']);
Route::get('/deleteHRDept/{id}',[EmployeeController::class, 'deleteHRDept']);
Route::get('/deleteITDept/{id}',[EmployeeController::class, 'deleteITDept']);
Route::get('/deleteOMDept/{id}',[EmployeeController::class, 'deleteOMDept']);
Route::get('/deleteFinDept/{id}',[EmployeeController::class, 'deleteFinDept']);

//Department
Route::get('/departmentList',[DepartmentController::class,'index']);
Route::get('/empMarketing',[DepartmentController::class,'indexMarketing']);
Route::get('/empFinance',[DepartmentController::class,'indexFinance']);
Route::get('/empHR',[DepartmentController::class,'indexHR']);
Route::get('/empIT',[DepartmentController::class,'indexIT']);
Route::get('/empOM',[DepartmentController::class,'indexOM']);

