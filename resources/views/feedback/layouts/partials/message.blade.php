@if (Session::has('message'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	{{Session::get('message')}}	
</div>
@endif