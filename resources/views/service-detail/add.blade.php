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
        <h3 class="card-title">Add Service Detail</h3>
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
      <form action="{{ url('admin/serviceDetail') }}" method="POST" class="form-horizontal">
        @csrf
        <div class="card-body">
          {{-- <div class="col-sm-6"> --}}
          <!-- select -->
          {{-- <div class="form-group"> --}}
          <div class="form-group row">
            <label style="margin: 5px 10px">Select Service</label>
            <div class="col-sm-8">
              <select style="margin: 5px 60px" name="service_id" class="custom-select">
                <option value="">Select...</option>
                @foreach ($services as $key => $value)
                <option value="{{ $value->id }}">{{ $value-> service_name }} </option>

                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Total Service</label>
            <div class="col-sm-8">
              <input type="text" name="total" value="{{ old('total') }}" class="form-control" id="inputEmail3"
                placeholder="Service Name">
            </div>
          </div>
          <div class="form-group row">
            <label for="inputEmail3" class="col-sm-2 col-form-label">Running Service</label>
            <div class="col-sm-8">
              <input type="text" name="running" value="{{ old('running') }}" class="form-control" id="inputEmail3"
                placeholder="Service Name">
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
<!-- </div> -->

@endsection