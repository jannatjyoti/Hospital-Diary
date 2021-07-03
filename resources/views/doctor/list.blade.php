@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Dashboard")

@section('content')
 
<div class="card">
    <div class="card-header">
      <h3 class="card-title">DataTable with default features</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="doctor_datatable" class="table table-hover">
        <thead>
        <tr>
          <th class="bg-primary">Doctor Name</th>
          <th class="bg-primary">Email</th>
          {{-- <th class="bg-primary">Degree</th> --}}
          <th class="bg-primary">Specialized</th>
          {{-- <th class="bg-primary">Number</th> --}}
          {{-- <th class="bg-primary">Chamber Time</th> --}}
          {{-- <th class="bg-primary">Room No</th> --}}
          <th class="bg-primary">Option</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $doctors as $doctor)
        <tr>
          <td>{{ $doctor-> doctor_Name }}</td>
          <td>{{ $doctor-> email }}</td>
          {{-- <td>{{ $doctor-> degree}}</td> --}}
          <td>{{ $doctor-> specialized}}</td>
          {{-- <td>{{ $doctor-> number}}</td> --}}
          {{-- <td>{{ $doctor-> chamber_time}}</td> --}}
          {{-- <td>{{ $doctor-> room_no}}</td> --}}
          <td><div style="width: 200px">
            <a href="{{ url("admin/doctor/$doctor->id") }}" class="btn btn-primary" style="float: left; margin-right: 2px">
              <i class="fa fa-pencil"></i> Detail 
            </a>
              <a href="{{ url("admin/doctor/$doctor->id/edit") }}" class="btn btn-primary" style="float: left; margin-right: 2px">
                  <i class="fa fa-pencil"></i> Edit 
                </a>
                <a href="{{ url("admin/doctor/delete/$doctor->id")}}" class="delete" style="float: left; margin-right: 2px">
                  <button class="btn btn-danger" >Delete</button>
                  </a>

                {{-- <form action="{{ url("aadmin/doctor/delete/$doctor->id") }}"> --}}
                    {{-- <input type="hidden" name="doctor_id"> --}}
                    {{-- @csrf --}}
                    {{-- @method('DELETE') --}}
                      {{-- <button type="submit" class="btn btn-danger" >Delete</button> --}}
                {{-- </form> --}}
              </div>
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
<script src="{{asset('plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
    $(function () {
    //   $("#example1").DataTable();
      $('#doctor_datatable').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
    <!-- DataTables -->
  </script>

  <script>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<link rel="stylesheet" href="http://t4t5.github.io/sweetalert/dist/sweetalert.css">


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