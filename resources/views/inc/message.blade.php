@if(count($errors) > 0)
@foreach($errors->all() as $error)
<div align="center" class="alert alert-danger">
{{$error}}
</div>
@endforeach
@endif

@if(session('success'))
<div align="center" col-md-12 col-sm-12 col-xs-12>
<div class="alert alert-success">
{{session('success')}}
</div>
</div>
@endif


@if(session('error'))
<div align="center" class="alert alert-danger">
{{session('error')}}
</div>
@endif
