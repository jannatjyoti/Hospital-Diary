@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Edit Service")

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
        <h3 class="card-title">Edit Service</h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form action="{{ url("admin/service/$service->id") }}" method="POST" class="form-horizontal"
        enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="card-body">
          <div class="form-group row">
            <label for="service_name" class="col-sm-2 col-form-label">Service Name</label>
            <div class="col-sm-10">
              <input type="text" name="service_name" value="{{ $service->service_name }}" class="form-control col-9"
                id="service_name" placeholder="Service Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Service Image</label>
            <div class="col-sm-10">
              <input type="file" name="image" value="{{ $service->image_url }}" class="form-control col-9" id="image"
                placeholder="service image" accept="image/*">
            </div>
          </div>
          <div class="form-group row">
            <label class="col-sm-2 col-form-label">View Image</label>
            <div class="col-sm-10">
              <img id="view_img" style="max-height: 150px; max-width: 220px" src="{{ asset($service->image_url) }}" />
            </div>
          </div>
          @if(session('role') == '1')
          <div class="form-group row">
            <label for="is_active" class="col-sm-2 col-form-label">Status</label>
            <div class="col-sm-10">
              <select name="is_active" id="is_active" class="form-control col-9">
                <option value="1">Active</option>
                <option value="0">In-active</option>
              </select>
            </div>
          </div>
          @endif
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