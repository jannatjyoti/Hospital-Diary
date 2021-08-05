@if(!empty(session('success')))
<div class="alert alert-dismissible alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>

    <p><strong>Successful!</strong> {{session('success')}}</p>
</div>
@endif

@if(!empty(session('error')))
<div class="alert alert-dismissible alert-danger">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <p><b>Error!</b> {{session('error')}}</p>
</div>
@endif

@if(!empty(session('warning')))
<div class="alert alert-dismissible alert-warning">
    <button type="button" class="close" data-dismiss="alert">&times;</button>

    <p><strong>Warning!</strong> {{session('warning')}}</p>
</div>
@endif