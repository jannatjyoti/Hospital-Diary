@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Dashboard")

@section('content')

<div class="card">
  {{-- <div class="card-header">
      <h3 class="card-title">Doctor List</h3>
      <button type="button" class="btn btn-primary" style="margin: 5px 675px">Primary</button>
    </div> --}}
  <div class="card-header">
    <h1 class="card-title">Doctor List</h1>
    <a href="{{url('admin/doctor/create')}}"><button class="col-1 btn-outline-info  float-right ">Add</button></a>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="doctor_datatable" class="table table-hover dt-responsive" style="width: 100%">
      <thead>
        <tr>
          <th class="bg-info">Doctor Name</th>
          <th class="bg-info">Email</th>
          <th class="bg-info">Specialized</th>
          <th class="bg-info">Degree</th>
          <th class="bg-info">Option</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $doctors as $doctor)
        <tr>
          <td>{{ $doctor-> doctor_Name }}</td>
          <td>{{ $doctor-> email }}</td>
          <td>{{ $doctor-> specialized}}</td>
          <td>
            {{ $doctor-> degree}}
            {{-- <img style="max-height: 70px; max-width: 100px" src="{{ asset($doctor->image_url) }}"
              alt={{$doctor->doctor_Name}} /> --}}
            </td>
          <td class="col-2" style='white-space: nowrap'>
            <a href="{{ url("admin/doctor/$doctor->id") }}" class="btn btn-info">
              <i class="fas fa-eye"></i>
            </a>
            <a href="{{ url("admin/doctor/$doctor->id/edit") }}" class="btn btn-info">
              <i class="fas fa-edit"></i>
            </a>
            <a href="{{ url("admin/doctor/delete/$doctor->id")}}" onclick="return confirm('Are you sure')"
              class="btn btn-danger">
              <i class="fas fa-trash-alt"></i>
            </a>



          </td>
        </tr>
        @endforeach

      </tbody>
    </table>
  </div>
  <!-- /.card-body -->
</div>

@endsection

@push("page-js")
<!-- DataTables -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">

<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<script>
  $(function () {
    //   $("#example1").DataTable();
      $('#doctor_datatable').DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
        "lengthChange": 5,
        "searching": true,
        // "iDisplayLength": 5,
        // "ordering": true,
        // "info": true,
        // "autoWidth": false,
      });
    });
    <!-- DataTables -->
</script>

<script>
  $(function(){
  $(".delete").click(function(){
      swal({   
          title: "Are you sure?",   
          text: "You will not be able to recover this imaginary file!",   
          type: "warning",   
          showCancelButton: true,   
          confirmButtonColor: "#DD6B55",   
          confirmButtonText: "Yes, delete it!",   
          closeOnConfirm: false 
      }).then(isConfirmed => { 
        if(isConfirmed) {
          $(".file").addClass("isDeleted");
          swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
}
        });
  });
});
</script>

@endpush