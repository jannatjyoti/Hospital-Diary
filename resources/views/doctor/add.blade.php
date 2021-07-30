@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Dashboard")

@section('content')
<div class="col-md-12">
<!-- <div class="content-wrapper">  -->
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
              <form action="{{url('admin/doctor')}}" method="post" class="form-horizontal">
              @csrf
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Doctor Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="doctor_Name" value="{{ old('doctor_Name') }}" class="form-control" id="inputEmail3" placeholder="Doctor Name">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Designation</label>
                    <div class="col-sm-10">
                      <input type="text" name="designation" value="{{ old('designation') }}" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                      <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Degree	</label>
                    <div class="col-sm-10">
                      <input type="text" name="degree" value="{{ old('degree') }}" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Specialized</label>
                    <div class="col-sm-10">
                      <input type="text" name="specialized" value="{{ old('specialized') }}" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">number</label>
                    <div class="col-sm-10">
                      <input type="text" name="number" value="{{ old('number') }}" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Chamber Time</label>
                    <div class="col-sm-10">
                      <input type="text" name="chamber_time" value="{{ old('chamber_time') }}" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Room No</label>
                    <div class="col-sm-10">
                      <input type="text" name="room_no" value="{{ old('room_no') }}" class="form-control" id="inputEmail3" placeholder="">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">save</button>
                  <button type="submit" class="btn btn-default float-right">Cancel</button>
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