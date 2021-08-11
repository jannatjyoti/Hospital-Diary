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
        <h3 class="card-title">Add Doctor</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->

      @if ($errors->any())
      <div class="alert alert-danger" role="alert">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <form action="{{url('admin/doctor')}}" method="post" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="card-body">
          <div class="form-group row">
            <label for="doctor_Name" class="col-sm-2 col-form-label">Doctor Name</label>
            <div class="col-sm-10">
              <input type="text" name="doctor_Name" value="{{ old('doctor_Name') }}" class="form-control"
                id="doctor_Name" placeholder="Doctor Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Email</label>
            <div class="col-sm-10">
              <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email"
                placeholder="enter email address">
            </div>
          </div>
          <div class="form-group row">
            <label for="designation" class="col-sm-2 col-form-label">Designation</label>
            <div class="col-sm-10">
              <select name="designation" id="designation" class="form-control">
                <option value="">Select...</option>
                @foreach ($designation as $item)
                <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
              </select>
            </div>

          </div>

          <div class="form-group row">
            <label for="degree" class="col-sm-2 col-form-label">Degree </label>
            <div class="col-sm-10">
              <input type="text" name="degree" value="{{ old('degree') }}" class="form-control" id="degree"
                placeholder="enter degrees">
            </div>
          </div>
          <div class="form-group row">
            <label for="specialized" class="col-sm-2 col-form-label">Specialized</label>
            <div class="col-sm-10">
              <select name="specialized" id="specialized" class="form-control">
                <option value="">Select...</option>
                @foreach ($specialized as $item)
                <option value="{{ $item }}">{{ $item }}</option>
                @endforeach
              </select>
            </div>

          </div>

          <div class="form-group row">
            <label for="number" class="col-sm-2 col-form-label">Contact</label>
            <div class="col-sm-10">
              <input type="text" name="number" value="{{ old('number') }}" class="form-control" id="number"
                placeholder="enter contact number">
            </div>
          </div>
          <div class="form-group row">
            <label for="chamber_time" class="col-sm-2 col-form-label">Chamber Time</label>
            <div class="col-sm-10">
              <input type="text" name="chamber_time" value="{{ old('chamber_time') }}" class="form-control"
                id="chamber_time" placeholder="enter chamber time">
            </div>
          </div>
          <div class="form-group row">
            <label for="room_no" class="col-sm-2 col-form-label">Room No</label>
            <div class="col-sm-10">
              <input type="text" name="room_no" value="{{ old('room_no') }}" class="form-control" id="room_no"
                placeholder="enter room no">
            </div>
          </div>

          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-10">
              <input type="file" name="image" value="{{ old('image') }}" class="form-control" id="image"
                accept="image/*" placeholder="select image">
            </div>
          </div>
          <div id="view_img_div" class="form-group row" hidden>
            <label class="col-sm-2 col-form-label">View Image</label>
            <div class="col-sm-10">
              <img id="view_img" style="max-height: 150px; max-width: 220px" />
            </div>
          </div>

        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-lg btn-info">save</button>
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