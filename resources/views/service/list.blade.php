@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Dashboard")

@section('content')
 
<div class="card">
    <div class="card-header">
      <h3 class="card-title"><b>Service List</b></h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="doctor_datatable" class="table table-hover">
        <thead>
        <tr>
          <th class="bg-primary">Service Name</th>
      
          <th class="bg-primary">Option</th>
        </tr>
        </thead>
        <tbody>
            @foreach ( $services as $service)
        <tr>
          <td>{{ $service-> service_name }}</td>
          
          <td>
                 <a href="{{ url("admin/service/$service->id/edit") }}" class="btn btn-primary" >
                <i class="fas fa-edit"></i> 
                </a>
                <a href="{{ url("admin/service/delete/$service->id")}}" onclick="return confirm('Are you sure')" class="btn btn-danger" >
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