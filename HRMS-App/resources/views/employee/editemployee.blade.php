@extends('layouts.master')

@section('content')

<style>
    input[readonly]{
	  color: #696969;
	  background: #DCDCDC;
    }
</style>

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item"><a href="">Employee</a></li>
              <li class="breadcrumb-item"><a href="/employeeList">All</a></li>
              <li class="breadcrumb-item active">Edit Employee</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <!-- /.card-header -->
                <div class="card-header" style="background-color: #17a2b8">
                    <h3 class="card-title" style="font-weight:bold; color: white">Employee Profile</h3>

                   <!-- <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div> -->
                </div>
                <!-- form start -->
                <form action="{{ url('update/'.$employeeData->id)}}" method="post">
                @csrf
                @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="staffid">Employee ID</label>
                                    <input type="text" class="form-control" id="emp_id" name = "emp_id" value="{{$employeeData->emp_id}}" readonly>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstName">Name</label>
                                    <input type="text" class="form-control" id="emp_name" name = "emp_name" value="{{$employeeData->emp_name}}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastName">Identity Card</label>
                                    <input type="text" class="form-control" id="icno" name = "icno" value="{{$employeeData->icno}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" id="gender" name = "gender" value= "{{$employeeData->gender}}" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="birthday">Birthdate</label>
                                    <input type="date" id="birthdate"  class="form-control" name="birthdate" value="{{$employeeData->birthdate}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                  <label>Race</label>
                                  <input type="text" class="form-control" id="race" name = "race" value= "{{$employeeData->race}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstName">Address</label>
                                    <input type="text" class="form-control" id="address" name = "address" value="{{$employeeData->address}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phoneNumber">Mobile Phone</label>
                                    <input type="number" class="form-control" id="phoneno" name = "phoneno" value="{{$employeeData->phoneno}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{$employeeData->email}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                    <label>Department</label>
                                    <input type="text" class="form-control" id="dept_id" name="dept_id" value="{{$employeeData->dept_id}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                  <label>Position</label>
                                  <input type="text" class="form-control" id="emp_position" name="emp_position" value="{{$employeeData->emp_position}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="birthday">Join Date</label>
                                    <input type="date" id="joindate"  class="form-control" name="joindate" value="{{$employeeData->joindate}}" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bankname">Bank Name</label>
                                    <input type="text" class="form-control" id="bankname" name = "bankname" value= "{{$employeeData->bankname}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bankname">Bank Account</label>
                                    <input type="number" class="form-control" id="accbank" name="accbank" value="{{$employeeData->accbank}}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Update Employee</button>
                    </div>
                </form>
            </div>
              <!-- /.card-header -->
        </div>
    </section>


@endsection
