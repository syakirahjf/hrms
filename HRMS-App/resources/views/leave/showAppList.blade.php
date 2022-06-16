@extends('layouts.master')


@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Leave Application</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item active">Leave Application</li>
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
                    <h3 class="card-title" style="font-weight:bold; color: white">List of Leave Applications</h3>

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
                        <th style="width: 120px">Employee ID</th>
                        <th>Employee Name</th>
                        <th>Leave Type</th>
                        <th style="width: 150px">From</th>
                        <th style="width: 150px">To</th>
                        <th style="width: 100px">Status</th>
                        <th>Action</th>
                      </tr>
                    </thead>

                    <tbody>
                    @if ($leaveData->count() == 0)
                    <tr>
                        <td colspan="8">No record to display.</td>
                    </tr>
                    @endif

                    @foreach ($leaveData as $leave)
                        <tr>
                            <td>{{ $loop->index+1 }}</td>
                            <td style="text-align: center">{{$leave->emp_id}}</td>
                            <td>{{$leave->emp_name}}</td>
                            <td style="text-align: center">{{$leave->leave_type}}</td>
                            <td style="text-align: center">{{date('d-M-Y', strtotime($leave->startdate))}}</td>
                            <td style="text-align: center">{{date('d-M-Y', strtotime($leave->enddate))}}</td>

                            @if ($leave->status == "Pending")
                                <td><span class="badge bg-warning" style="font-size: 15px">Pending</span></td>
                            @elseif ($leave->status == "Approved")
                                <td><span class="badge bg-success" style="font-size: 15px">Approved</span></td>
                            @else
                                <td><span class="badge bg-danger" style="font-size: 15px">Declined</span></td>
                            @endif

                            <td style="text-align: center">
                                <a class="btn btn-primary" href="{{url('showLeaveApp/'.$leave->id)}}">
                                    <i class="fas fa-edit"></i>
                                    Edit
                                </a>
                                <a class="btn btn-danger" href="{{url('deleteLeaveApp/'.$leave->id)}}">
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


@endsection
