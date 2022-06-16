{{-- Dashboard for Admin --}}
@extends('layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
            </ol>
          </div>
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                  <h2>Welcome to HRMS Suite</h2>
                </div>
            </div>

              <!-- /.card -->
            <div class="row">
                <div class="col-lg-4 col-7">
                  <!-- small box -->
                  <div class="small-box bg-info">
                    <div class="inner">
                      <h3>{{$empData}}</h3>

                      <p>Number of Employees</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-users"></i>
                    </div>
                    <a href="/employeeList" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>


                <!-- ./col -->
                <div class="col-lg-4 col-7">
                  <!-- small box -->
                  <div class="small-box bg-success">
                    <div class="inner">
                      <h3>{{$departmentData}}</h3>

                      <p>Department</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-sitemap"></i>
                    </div>
                    <a href="/departmentList" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>


                <!-- ./col -->
                <div class="col-lg-4 col-7">
                  <!-- small box -->
                  <div class="small-box bg-warning">
                    <div class="inner">
                      <h3>{{$leaveData}}</h3>

                      <p>Leave Applications</p>
                    </div>
                    <div class="icon">
                      <i class="fas fa-file"></i>
                    </div>
                    <a href="/showAppList" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                  </div>
                </div>
            </div>
        </div>
    </section>

    {{-- <div class="content">
        <div class="card bg-gradient-success">
            <div class="card-header border-0">

              <h3 class="card-title">
                <i class="far fa-calendar-alt"></i>
                Calendar
              </h3>
              <!-- tools card -->
              <div class="card-tools">
                <!-- button with a dropdown -->
                <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                  <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                  <i class="fas fa-times"></i>
                </button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.card-header -->
            <div class="card-body pt-0">
              <!--The calendar -->
              <div id="calendar" style="width: 100%"></div>
            </div>
            <!-- /.card-body -->
        </div>
    </div> --}}

@endsection
