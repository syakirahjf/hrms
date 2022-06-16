@extends('layouts.employee')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Application List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Leave Application</a></li>
              <li class="breadcrumb-item active">List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<div class="card card-primary">

              <div class="row">
          <div class="col-12">
            <div class="card">


              <div class="card-body table-bordered">

                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>LEAVE ID</th>
                      <th>LEAVE TYPE</th>
                      <th>LEAVE DATE</th>
                      <th>LEAVE END</th>
                      <th>STATUS</th>

                    </tr>
                  </thead>
                  @foreach ($leaveList as $list)
                  @if ($list->emp_id == 'E001')
                  <tbody>
                            <tr>
                            <td><?php $n=1; echo $n; $n++; ?></td>
                            <td >{{$list->leave_id}}</td>
                            <td>{{$list->leave_type}}</td>
                            <td >{{date('d-M-Y', strtotime($list->startdate))}}</td>
                            <td >{{date('d-M-Y', strtotime($list->enddate))}}</td>

                            @if ($list->status == "Pending")
                                <td><span class="badge bg-warning" style="font-size: 15px">Pending</span></td>
                            @elseif ($list->status == "Approved")
                                <td><span class="badge bg-success" style="font-size: 15px">Approved</span></td>
                            @elseif ($list->status == "Declined")
                                <td><span class="badge bg-danger" style="font-size: 15px">Declined</span></td>
                            @else
                            <td><span class="badge bg-secondary" style="font-size: 15px">Cancelled</span></td>
                            @endif


                        </tr>
                  </tbody>
                  @endif

              @endforeach
                </table>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>


            <!-- /.card -->
    <!-- /.content -->
  </div>





@endsection
