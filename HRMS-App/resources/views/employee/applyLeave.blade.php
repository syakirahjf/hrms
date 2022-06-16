@extends('layouts.employee')

@section('content')



<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">New Application</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item"><a href="#">Leave Apllication</a></li>
              <li class="breadcrumb-item active">New Application</li>
            </ol>
          </div>
        </div>
</div>
    </div>



  <div class="col-md-6">


      <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Application</h3>
              </div>

              <form action="newApply" method = "post">
                <input type = "hidden" name = "_token" value = "<?php echo csrf_token() ?>">
                <div class="card-body">
                  <div class="form-group">
                    <label for="startdate">Start Date</label>
                    <input type="date" class="form-control" name="startdate" id="startdate" placeholder="Enter Start Date" min="<?php echo date('Y-m-d', strtotime('+1 days')); ?>"required>
                  </div>

                  <div class="form-group">
                    <label for="enddate">Last Date</label>
                    <input type="date" class="form-control" id="enddate" name="enddate" placeholder="Enter End Date" min="<?php  echo  date('Y-m-d', strtotime('+1 days')); ?>"required >
                    <input type="hidden" name="emp_id" value="E001" />
                    <input type="hidden" name="status" value="Pending" />
                    <input type="hidden" name="id" value="<?php echo $leaveApp->count()+1?>" />
                    <input type="hidden" name="leaveid" value="L00<?php echo $leaveApp->count()+1?>" />

                  </div>
                  <div class="form-group">
                  <label for="leaveType">Leave Type </label>
                  <select class="custom-select rounded-0" name="leave_type" id="leave_type" required>
                    <option value="SL">SL-Sick Leave</option>
                    <option value="CL">CL-Casual Leave</option>
                    <option value="ML">ML-Maternity Leave</option>
                    <option value="PL">PL-Paternity Leave</option>
                    <option value="UL">UL-Unpaid Leave</option>
                    <option value="EL">EL-Emegency Leave</option>
                  </select>
                </div>
                <div class="card-footer">
                <button type="submit" class="btn btn-primary">Apply</a>
                </div>
              </form>
      </div>

  </div>
</div>

  @endsection
