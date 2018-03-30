@if(Session::has('error'))
	<div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
        <h4 class="alert-heading">Lỗi!</h4>
        {{Session::get('error')}}
    </div>
@endif

@foreach($errors->all() as $error)
	<div class="alert alert-error alert-block"> <a class="close" data-dismiss="alert" href="#">×</a>
        <h4 class="alert-heading">Lỗi!</h4>
        {{$error}}
    </div>
@endforeach