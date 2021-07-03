@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Dashboard")

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        {{-- <h1>Profile</h1> --}}
      </div>
      {{-- <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">User Profile</li>
        </ol>
      </div> --}}
    </div>
  </div><!-- /.container-fluid -->
</section>
<div class="container">
  <div class="col-md-9">
<div class="card card-primary card-outline">
  <div class="card-body box-profile">
    

    <h3 class="profile-username text-center">{{ $doctor-> doctor_Name }}</h3>

    <p class="text-muted text-center">Doctor</p>

    <div class="card-body">
      <strong><i class="fa fa-graduation-cap" aria-hidden="true"></i> Degree</strong>

      <p class="text-muted">
        {{ $doctor-> degree }}
      </p>

      <hr>

      <strong><i class="fa fa-book" aria-hidden="true"></i> Specialized</strong>

      <p class="text-muted">{{ $doctor-> specialized }}</p>

      <hr>

      <strong><i class="fa fa-envelope" aria-hidden="true"></i> Email </strong>

      <p class="text-muted">
        {{ $doctor-> email}}
      </p>

      <hr>

      <strong><i class="fa fa-phone" aria-hidden="true"></i> Number</strong>

      <p class="text-muted">{{ $doctor-> number }}</p>
      <hr>
      <strong><i class="fa fa-clock-o" aria-hidden="true"></i>Chamber Time</strong>

      <p class="text-muted">
        {{ $doctor-> chamber_time }}
      </p>

      <hr>
      <strong><i class="fa fa-home" aria-hidden="true"></i> Room Number</strong>

      <p class="text-muted">
        {{ $doctor-> room_no }}
      </p>

      <hr>
    </div>

    {{-- <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a> --}}
  </div>
  <!-- /.card-body -->
</div>
</div>
</div>

@endsection