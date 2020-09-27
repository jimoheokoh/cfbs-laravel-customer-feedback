@section('title') 
Request Feedback Form
@endsection 
@extends('feedback.layouts.base')
@section('content')
@include('feedback.layouts.partials.passwordchecker')
<div class="modal__content">
    <h4 class="text-center">Request Feedback</h4>
    <hr>
    @if(isset($success))
    <div class="alert alert-success">
        Your Feedback request mail has been sent successfully!
    </div>
    @endif
    <form method="POST" action="{{route('feedback.sendrequest')}}">
    @csrf
    <ul class="form-list">
        <li class="form-list__row">
        <label>Recipient Email Address:</label>
        <input type="email" name="email" required placeholder="Enter Email address"/><br><br>
        <label>Message to Recipient:</label>
        <textarea name="message" cols="30" rows="10">{!!$message !!}</textarea>
        </li>
        <li>
        <button type="submit" class="button">Send</button>
        </li>
    </ul>
    </form>
    @include('feedback.layouts.partials.adminmenu')
</div>
@endsection