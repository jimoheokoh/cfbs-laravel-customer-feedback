@section('title') 
User Feedback Form
@endsection 
@extends('feedback.layouts.base')
@section('style')
@endsection
@section('content')
<div class="modal__content">
    <h4 class="text-center">Customer Feedback Form</h4>
    <hr>
    <form method="POST" action="{{route('feedback.send')}}">
    @csrf
    <ul class="form-list">
        <li class="form-list__row">
        <label>Name:</label>
        <input type="text" name="name" required="" />
        </li>
        <li class="form-list__row form-list__row--inline">
        <div>
            <label>Your Info:</label>
            <div class="form-list__input-inline">
            <input type="email" name="email" required="" placeholder="Email" />
            <input type="text" name="phone" placeholder="Phone" minlength="5" maxlength="15" required />
            </div>
        </div>
        </li>
        @foreach($data as $sdata)
        <li class="form-list__row">
        <label style="color:brown">{{$sdata->question}}:</label>
        <input type="hidden" name="data[{{$sdata->id}}][question]" value="{{$sdata->id}}">
        @if($sdata->response_type_id == 2)
        <textarea name="data[{{$sdata->id}}][response]" cols="30" rows="4"></textarea>
        @else
        <div class="range-field">
        <input type="{{$sdata->response_type->field_type}}" name="data[{{$sdata->id}}][response]" @if($sdata->response_type_id == 6) min="1" max="10" @endif @if($sdata->required == 1) required @endif @if($sdata->response_type_id == 6) id="start" @endif @if($sdata->required == 1) required @endif />
        </div>
        @endif
        </li>
        @endforeach
        <li>
        <button type="submit" class="button">Submit</button>
        </li>
    </ul>
    </form>
    <br>
    <div class="text-right">
    <a href="{{route('responses.index')}}" class="small">Manage &raquo;</a>
    </div>
</div> <!-- END: .modal__content -->
@endsection
@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
<script>
$(document).ready(function() {
  $("#start").range();
});
</script>
@endsection