@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Dashboard")

@section('content')
 
<div class="card">
    <div class="card-header">
      <h3 class="card-title">Service Detail List</h3>
      <a href="{{url('admin/serviceDetail/create')}}"><button type="submit" class="btn btn-primary  btn-flat float-right">Add</button></a>
    </div>
    {{ Session::get('service') }}
    <!-- /.card-header -->
    <div class="card-body">
      <table id="service-detail_datatable" class="table table-hover">
        <thead>
        <tr>
          <th class="bg-primary">Service Name</th>
          <th class="bg-primary">Total</th>
          <th class="bg-primary">Running</th>
          <th class="bg-primary">Available</th>
      
          <th class="bg-primary">Option</th>
        </tr>
        </thead>
        <tbody>

            @foreach ( $serviceDetails as $serviceDetail)
        <tr>
           <td>{{ $serviceDetail->services-> service_name }}</td>
          <td>{{ $serviceDetail->total }}</td>
          <td>{{ $serviceDetail->running }}</td>
          <td>{{ $serviceDetail->total - $serviceDetail->running }}</td>
          
          <td>
              <a href="{{ url("admin/serviceDetail/$serviceDetail->id/edit") }}" class="btn btn-primary" >
                <i class="fas fa-edit"></i> 
                </a>
                <a href="{{ url("admin/serviceDetail/delete/$serviceDetail->id")}}" onclick="return confirm('Are you sure')" class="btn btn-danger" >
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
      $('#service-detail_datatable').DataTable({
        "paging": true,
        "pageLength": 5,
        "lengthMenu": [[5, 10, 20, -1], [5, 10, 20, "All"]],
        "lengthChange": 5,
        "searching": true,
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