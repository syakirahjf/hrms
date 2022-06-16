@extends('layouts.master')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/employeeList">Employee List</a></li>
              <li class="breadcrumb-item active">All</li>
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
                    <h3 class="card-title" style="font-weight:bold; color: white">Employee List</h3>

                    <div class="card-tools">
                      <div class="input-group input-group-sm" style="width: 150px;">
                        <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                        <div class="input-group-append">
                          <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                          </button>
                        </div>
                      </div>
                    </div>
                </div>

                {{-- card body --}}
                <div class="card-body">
                  <table class="table table-bordered">
                    <thead style="text-align: center">
                      <tr>
                        <th style="width: 10px">No.</th>
                        <th style="width: 150px">Employee ID</th>
                        <th>Employee Name</th>
                        <th>Department</th>
                        <th>Position</th>
                      </tr>
                    </thead>
                    <tbody>
                    @if ($employeeData->count() == 0)
                    <tr>
                        <td colspan="3">No record to display.</td>
                    </tr>
                    @endif

                    @foreach ($employeeData as $employee)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td style="text-align: center">{{$employee->emp_id}}</td>
                            <td>{{$employee->emp_name}}</td>
                            <td>{{$employee->dept_name}}</td>
                            <td style="text-align: center">{{$employee->emp_position}}</td>
                            <td style="text-align: center">
                                <a class="btn btn-primary" href="{{url('editemployee/'.$employee->id)}}">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="{{url('deleteemployee/'.$employee->id)}}">
                                    <i class="fas fa-trash"></i>
                                    Delete
                                </a>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                  </table>
                </div>
              </div>
       </div>
    </section>
    <div class="container" style="text-align: left;">
        <button class = "btn btn-info mt-3" id ="PrintButton" onclick="PrintPage()" style="width: 100px">
            <i class="fas fa-print"></i>
            Print</button>
      </div>
    <script type="text/javascript">
        function PrintPage() {
            window.print();
        }
    </script>
@endsection
