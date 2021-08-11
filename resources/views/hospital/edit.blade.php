@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Update info")

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
                <h3 class="card-title">Update Hospital info...</h3>
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
            <form action="{{ url("admin/hospital/$hospital->id") }}" method="POST" class="form-horizontal"
                enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="card-body">
                    <div class="form-group row">
                        <label for="hospital_name" class="col-sm-2 col-form-label">Hospital Name</label>
                        <div class="col-sm-8">
                            <input type="text" name="hospital_name" value="{{ $hospital->hospital_name }}"
                                class="form-control" id="hospital_name" placeholder="hospital Name">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-sm-2 col-form-label">Address</label>
                        <div class="col-sm-8">
                            <input type="text" name="address" value="{{ $hospital->address }}" class="form-control"
                                id="address" placeholder="hospital address">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="contact_no" class="col-sm-2 col-form-label">Contact</label>
                        <div class="col-sm-8">
                            <input type="text" name="contact_no" value="{{ $hospital->contact_no }}"
                                class="form-control" id="contact_no" placeholder="hospital contact">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image" class="col-sm-2 col-form-label">Image</label>
                        <div class="col-sm-8">
                            <input type="file" accept="image/*" name="image" class="form-control"
                                value="{{ $hospital->image_url }}" id="image" placeholder="select image">
                        </div>
                    </div>

                    <div id="view_img_div" class="form-group row">
                        <label class="col-sm-2 col-form-label">View Image</label>
                        <div class="col-sm-10">
                            <img id="view_img" src="{{ asset($hospital->image_url) }}"
                                style="max-height: 150px; max-width: 220px" />
                        </div>
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-info">Update</button>
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