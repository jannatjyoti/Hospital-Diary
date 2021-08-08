@extends('dashboards.admins.layouts.admin-dash-layout')
@section('title',"Dashboard")

@section('content')

<div class="card">
  <div class="card-header">
    <h3 class="card-title"><b>Service List</b></h3>
  </div>
  <!-- /.card-header -->
  <div class="card-body">
    <table id="service_datatable" class="table table-hover">
      <thead>
        <tr>
          <th class="bg-primary">Service Name</th>
          <th class="bg-primary">Status</th>

          <th class="bg-primary">Option</th>
        </tr>
      </thead>
      <tbody>
        @foreach ( $services as $service)
        <tr>
          <input type="hidden" class="servicedelete_val" value="{{ $service->id }}">
          <td>{{ $service->service_name }}</td>
          <td>{{ $service->is_active == 0 ? 'Inactive' : 'Active' }}</td>

          <td>
            <a href="{{ url("admin/service/$service->id/edit") }}" class="btn btn-primary">
              <i class="fas fa-edit"></i>
            </a>
            {{-- <a href="{{ url("admin/service/delete/$service->id")}}" onclick="return confirm('Are you sure')"
            class="btn btn-danger" >
            <i class="fas fa-trash-alt"></i>
            </a> --}}

            <button type="button" class=" btn btn-danger delete"><i class="fas fa-trash-alt"></i></button>

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
  integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
  crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
  $(function () {
    //   $("#example1").DataTable();
      $('#service_datatable').DataTable({
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

    // swal("Delete","","error",{
    //     button:"OK",
    //   });

   $(function(){
    
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
     $('.delete').click(function(e){
      

       var delete_id = $(this).closest("tr").find('.servicedelete_val').val();
       alert(delete_id);
      
          console.log(delete_id);
      swal("Delete",{
  title: "Are you sure?",
  text: "Yes delete this data!",
  icon: "warning",
  buttons: true,
  dangerMode: true,
  
})
.then((willDelete) => {
  
  if (willDelete) {
    console.log(delete_id);
var data = {
// "_token": $('input[name="csrf-token"]').val(),
"id": delete_id,
};

    $.ajax({
      type:"DELETE"
      url:'/admin/service/delete/'+delete_id,
      // data: data,
      success: function(response){
        swal(response.massage, {
      icon: "success",
    });
    .then((result) => {
      location.reload();
    });
      }

    });
    
  }
});
     });

   });


</script>

@endpush