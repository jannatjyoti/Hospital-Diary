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
        <h3 class="card-title">Edit Service Detail</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ url("admin/serviceDetail/$serviceDetails->id")}}" method="POST" class="form-horizontal">
        @csrf
        @method('PATCH')
        <div class="card-body">

          <div class="form-group row">
            <label for="service_name" class="col-sm-2 col-form-label">Service Name</label>
            <div class="col-sm-8">
              <input type="text" name="service_name" value="{{ $serviceDetails->services->service_name }}"
                class="form-control" id="service_name" disabled>
            </div>
          </div>
          <div class="form-group row">
            <label for="total" class="col-sm-2 col-form-label">Total Service</label>
            <div class="col-sm-8">
              <input type="number" name="total" value="{{ $serviceDetails->total }}" class="form-control" id="total"
                placeholder="total service">
            </div>
          </div>
          <div class="form-group row">
            <label for="running" class="col-sm-2 col-form-label">Running Service</label>
            <div class="col-sm-8">
              <input type="number" name="running" value="{{ $serviceDetails->running }}" class="form-control"
                id="running" placeholder="running service">
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