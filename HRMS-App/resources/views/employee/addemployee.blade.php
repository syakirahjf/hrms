@extends('layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Employee</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active">Add Employee</li>
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

                <div class = "container">
                <!-- form start -->
                <form action = "insert" method="POST">
                @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="staffid">Employee ID</label>
                                    <input type="text" class="form-control" id="emp_id" name ="emp_id" placeholder="Enter employee id" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstName">Name</label>
                                    <input type="text" class="form-control" id="emp_name" name ="emp_name" placeholder="Enter employee name" >
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="lastName">Identity Card</label>
                                    <input type="text" class="form-control" id="icno" name="icno" placeholder="Enter identity card" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label>Gender</label><br>
                                    <select class="form-control" name='gender'>
                                        <option>Male</option>
                                        <option>Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="birthday">Birthdate</label><br>
                                    <input type="date" class="form-control" id="birthdate" name="birthdate" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                  <label>Race</label><br>
                                  <select class="form-control" name='race'>
                                    <option>Malay</option>
                                    <option>Chinese</option>
                                    <option>India</option>
                                    <option>Other</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="firstName">Address</label>
                                    <input type="text" class="form-control" id="address" name="address" placeholder="Enter address"  >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phoneNumber">Mobile Phone</label>
                                    <input type="number" class="form-control" id="phoneno" name = "phoneno" placeholder="Enter mobile phone"  >
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email address</label>
                                    <input type="email" class="form-control" id="email" name = "email" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                  <label>Department</label><br>
                                  <select class="form-control" name='dept_id'>
                                    <option value="10001">Marketing</option>
                                    <option value="10002">Finance</option>
                                    <option value="10003">Human Resource</option>
                                    <option value="10004">Operation Management</option>
                                    <option value="10005">Information Management</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <!-- select -->
                                <div class="form-group">
                                  <label>Position</label><br>
                                  <select class="form-control" name='emp_position'>
                                    <option>CEO</option>
                                    <option>Manager</option>
                                    <option>Employee</option>
                                    <option>Admin</option>
                                  </select>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="birthday">Join Date</label><br>
                                    <input type="date" class="form-control" id="joindate" name="joindate">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bankname">Bank Name</label>
                                    <input type="text" class="form-control" id="bankname" name="bankname" placeholder="Enter bank name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="bankname">Bank Account</label>
                                    <input type="number" class="form-control" id="accbank" name = "accbank">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>
                </form>
            </div>
              <!-- /.card-header -->
        </div>
    </section>


@endsection
