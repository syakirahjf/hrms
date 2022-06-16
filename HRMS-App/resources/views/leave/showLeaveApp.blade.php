@extends('layouts.master')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Application Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin/home">Home</a></li>
              <li class="breadcrumb-item"><a href="/">Leave Application</a></li>
              <li class="breadcrumb-item active">Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card card-info" style="max-width: 800px; margin:auto">
                <div class="card-header">
                  <h3 class="card-title">Leave Application Details</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                  <div class="card-body">
                      <table class="table table-bordered">
                        <tr>
                            <th>Employee ID</th>
                            <th style="width: 600px; font-weight:normal">{{$leave->emp_id}}</th>
                        </tr>
                        <tr>
                            <th>Employee Name</th>
                            <th style="width: 600px; font-weight:normal">{{$leave->emp_name}}</th>
                        </tr>
                        <tr>
                            <th>Leave Type</th>
                            <th style="width: 600px; font-weight:normal">{{$leave->leave_type}}</th>
                        </tr>
                        <tr>
                            <th>From</th>
                            <th style="width: 600px; font-weight:normal">{{date('d-M-Y', strtotime($leave->startdate))}}</th>
                        </tr>
                        <tr>
                            <th>To</th>
                            <th style="width: 600px; font-weight:normal">{{date('d-M-Y', strtotime($leave->enddate))}}</th>
                        </tr>
                        <tr>
                            <th>Status</th>
                            @if ($leave->status == "Pending")
                                <th style="width: 600px; font-weight:normal"><span class="badge bg-warning" style="font-size: 15px">Pending</span></th>
                            @elseif ($leave->status == "Approved")
                                <th style="width: 600px; font-weight:normal"><span class="badge bg-success" style="font-size: 15px">Approved</span></th>
                            @else
                                <th style="width: 600px; font-weight:normal"><span class="badge bg-danger" style="font-size: 15px">Declined</span></th>
                            @endif
                        </tr>
                      </table>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    @if ($leave->status == "Pending")
                        <a class="btn btn-success" href="{{url('updateAppStatusApprove/'.$leave->id)}}">Approve</a>
                    @elseif ($leave->status == "Approved")
                        <a class="btn btn-primary" href="{{url('undo/'.$leave->id)}}">Undo Approval</a>
                    @else
                        <a class="btn btn-primary" href="{{url('undo/'.$leave->id)}}">Undo Decline</a>
                    @endif

                    @if ($leave->status == "Pending")
                    <a class="btn btn-danger" href="{{url('updateAppStatusDecline/'.$leave->id)}}">Decline</a>
                    @endif

                    <a class="btn btn-secondary" href="{{url('showAppList')}}" style="margin-left: 15px">Back</a>
                  </div>
                </form>
            </div>
        </div>
    </section>

@endsection
