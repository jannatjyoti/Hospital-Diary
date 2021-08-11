@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Dashboard")

@section('content')
<div class="col-md-12">
  @php
  $designation = ['Intern','Professor','Asst. Professor','Associate Professor'];
  $specialized = ['Medicine','Kidney','Neuromedicine','Gestoentrology','E & T'];
  @endphp
  <div class="card card-info">

    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1>General Form</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li> -->
              <!-- <li class="breadcrumb-item active">General Form</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <div class="card card-info">
      <div class="card-header">
        <h3 class="card-title">Edit Doctor</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{url("admin/doctor/$doctor->id")}}" method="post" class="form-horizontal"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body">
          <div class="form-group row">
            <label for="doctor_Name" class="col-sm-2 col-form-label">Doctor Name</label>
            <div class="col-sm-10">
              <input type="text" name="doctor_Name" value="{{ $doctor->doctor_Name }}" class="form-control"
                id="doctor_Name" placeholder="Doctor Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="designation" class="col-sm-2 col-form-label">Designation</label>
            <div class="col-sm-10">
              <select name="designation" id="designation" class="form-control">
                @foreach ($designation as $item)
                <option value="{{ $item }}" {{ $doctor->designation==$item ? 'selected' : '' }}>{{ $item }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="{{ $doctor->email }}" class="form-control" id="email">
            </div>
          </div>
          <div class="form-group row">
            <label for="degree" class="col-sm-2 col-form-label">Degree </label>
            <div class="col-sm-10">
              <input type="text" name="degree" value="{{ $doctor->degree }}" class="form-control" id="degree">
            </div>
          </div>
          <div class="form-group row">
            <label for="specialized" class="col-sm-2 col-form-label">Specialized</label>
            <div class="col-sm-10">
              <select name="specialized" id="specialized" class="form-control">
                @foreach ($specialized as $item)
                <option value="{{ $item }}" {{ $doctor->specialized==$item ? 'selected' : '' }}>{{ $item }}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="form-group row">
            <label for="number" class="col-sm-2 col-form-label">Number</label>
            <div class="col-sm-10">
              <input type="text" name="number" value="{{ $doctor->number }}" class="form-control" id="number">
            </div>
          </div>
          <div class="form-group row">
            <label for="chamber_time" class="col-sm-2 col-form-label">Chamber Time</label>
            <div class="col-sm-10">
              <input type="text" name="chamber_time" value="{{ $doctor->chamber_time }}" class="form-control"
                id="chamber_time">
            </div>
          </div>
          <div class="form-group row">
            <label for="room_no" class="col-sm-2 col-form-label">Room No</label>
            <div class="col-sm-10">
              <input type="text" name="room_no" value="{{ $doctor->room_no }}" class="form-control" id="room_no">
            </div>
          </div>

          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
              <input type="file" name="image" value="{{ old('image') }}" class="form-control" id="image"
                accept="image/*">
            </div>
          </div>
          <div id="view_img_div" class="form-group row">
            <label class="col-sm-2 col-form-label">View Image</label>
            <div class="col-sm-10">
              <img id="view_img" src="{{ asset($doctor->image_url) }}" style="max-height: 150px; max-width: 220px" />
            </div>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-info">Update</button>
        </div>
        <!-- /.card-footer -->
      </form>
    </div>



    <!-- /input-group -->
  </div>
  <!-- /.card-body -->
</div>
</div>
<!-- </div> -->

@endsection