@extends('layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Department List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active">Department List</li>
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
                    <h3 class="card-title" style="font-weight:bold; color: white">List of Departments</h3>
                </div>

                {{-- card body --}}
                <div class="card-body">
                  <table class="table table-bordered" style="max-width: 600px;">
                    <thead style="text-align: center">
                      <tr>
                        <th style="width: 10px">No.</th>
                        <th>Department</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                        <tr>
                            <td style="text-align: center">1</td>
                            <td style="text-align: center;">Marketing</td>
                            <td style="text-align: center">
                                <a class="btn btn-primary" href="{{url('empMarketing')}}">
                                    <i class="fas fa-eye"></i>
                                    View Employee
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: center">2</td>
                            <td style="text-align: center;">Finance</td>
                            <td style="text-align: center">
                                <a class="btn btn-primary" href="{{url('empFinance')}}">
                                    <i class="fas fa-eye"></i>
                                    View Employee
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: center">3</td>
                            <td style="text-align: center;">Operation Management</td>
                            <td style="text-align: center">
                                <a class="btn btn-primary" href="{{url('empOM')}}">
                                    <i class="fas fa-eye"></i>
                                    View Employee
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: center">4</td>
                            <td style="text-align: center;">Human Resource</td>
                            <td style="text-align: center">
                                <a class="btn btn-primary" href="{{url('empHR')}}">
                                    <i class="fas fa-eye"></i>
                                    View Employee
                                </a>
                            </td>
                        </tr>

                        <tr>
                            <td style="text-align: center">5</td>
                            <td style="text-align: center;">Information Technology</td>
                            <td style="text-align: center">
                                <a class="btn btn-primary" href="{{url('empIT')}}">
                                    <i class="fas fa-eye"></i>
                                    View Employee
                                </a>
                            </td>
                        </tr>
                    </tbody>
                  </table>
                </div>
              </div>
       </div>
    </section>
@endsection
