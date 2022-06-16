@extends('layouts.employee')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">My Profile</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">My Profile</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Content Header (Page header) -->

    <div class="card card-primary">

                                        <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                        <div class="card-body table-bordered">
                                        <form>
                                        @foreach ($employeeData as $profile)
                                        @if ($profile->emp_id == 'E001')
                                            <table class="table table-hover text-nowrap">
                                            <thead>
                                                <tr>
                                                <th>Staff ID</th>
                                                <th>Employee Name</th>
                                                <th>IC.NO</th>
                                                <th>Gender</th>
                                                <th>Position</th>
                                                </tr>
                                            </thead>
                                            <tbody>



                                            <tr>
                                                <td >{{$profile->emp_id}}</td>
                                                <td >{{$profile->emp_name}}</td>
                                                <td >{{$profile->icno}}</td>
                                                <td >{{$profile->gender}}</td>
                                                <td >{{$profile->emp_position}}</td>
                                            </tr>


                                            </tbody>



                                            <table class="table table-hover text-nowrap">

                                            <thead>
                                                <tr>
                                                <th>Department</th>
                                                <th>Race</th>
                                                <th>Birth Date</th>
                                                <th>Phone Number</th>
                                                <th>E-mail</th>
                                                <th>Join Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>{{$profile->dept_name}}</td>
                                                <td>{{$profile->race}}</td>
                                                <td>{{$profile->birthdate}}</td>
                                                <td>{{$profile->phoneno}}</td>
                                                <td>{{$profile->email}}</td>
                                                <td>{{$profile->joindate}}</td>
                                                </tr>
                                            </tbody>

                                            </table>


                                            <table class="table table-hover text-nowrap">

                                            <thead>
                                                <tr>
                                                <th>Address</th>
                                                <th>Bank Name</th>
                                                <th>Account Number</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>{{$profile->address}}</td>
                                                <td>{{$profile->bankname}}</td>
                                                <td>{{$profile->accbank}}</td>
                                                </tr>
                                            </tbody>
                                            </table>
                                            @endif

                                            @endforeach
                                    </form>
                                    </div>
                                        </div>

                                    </div>
                                </div>
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
