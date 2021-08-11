@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Add Service")

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
        <h3 class="card-title">Add Service...</h3>
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
      <form action="{{ url('admin/service') }}" method="POST" class="form-horizontal" enctype="multipart/form-data">
        @csrf
        <div class="card-body">

          <div class="form-group row">
            <label for="service_name" class="col-sm-2 col-form-label">Service Name</label>
            <div class="col-sm-8">
              <input type="text" name="service_name" value="{{ old('service_name') }}" class="form-control"
                id="service_name" placeholder="Service Name">
            </div>
          </div>

          <div class="form-group row">
            <label for="image" class="col-sm-2 col-form-label">Image</label>
            <div class="col-sm-8">
              <input type="file" accept="image/*" name="image" class="form-control" value="{{ old('image')}}" id="image"
                placeholder="select image">
            </div>
          </div>

          <div id="view_img_div" class="form-group row" hidden>
            <label class="col-sm-2 col-form-label">View Image</label>
            <div class="col-sm-10">
              <img id="view_img" style="max-height: 150px; max-width: 220px" />
            </div>
          </div>

          @if (session('role') == '1')
          <div class="form-group row">
            <label for="is_active" style="margin: 5px 10px">Status</label>
            <div class="col-sm-8">
              <select style="margin: 5px 60px" name="is_active" class="custom-select" id="is_active">
                <option>Select ...</option>
                <option value="1">Active</option>
                <option value="0">In-active</option>
              </select>
            </div>
          </div>
          @endif
          <div class="card-footer">
            <button class="btn btn-info">Save</button>
          </div>
        </div>
        <!-- /.card-body -->

        <!-- /.card-footer -->
      </form>
    </div>

  </div>
</div>

<!-- /input-group -->
</div>
<!-- /.card-body -->
</div>
</div>
<!-- </div> -->

@endsection