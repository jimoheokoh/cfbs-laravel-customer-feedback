@section('title') 
User Feedback Summary
@endsection 
@extends('feedback.layouts.base')
@section('content')
@include('feedback.layouts.partials.passwordchecker')
<div class="modal__content">            
    <h4 class="text-center">User Feedback by {{$user->name}}</h4>
    <hr>
    <small>Session Code: {{$user->session_code}} -  Recorded: {{$user->created_at->diffForHumans()}}</small>
    <div class="alert alert-success">
        Here's a summary:
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Fields</th>
                            <th>Responses</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: small;">
                        <tr>
                            <td>Name:</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <td>Email Address:</td>
                            <td>{{$user->email}}</td>
                        </tr>
                        @if($user->phone)
                        <tr>
                            <td>Phone:</td>
                            <td>{{$user->phone}}</td>
                        </tr>
                        @endif
                        @foreach($showResponses as $showResponse)
                        <tr>
                            <td>{{$showResponse->form_question->question}}:</td>
                            <td>{{$showResponse->response}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <a href="{{route('responses.index')}}" class="btn btn-primary">&laquo; Back</a>
        </div>
    </div>
    @include('feedback.layouts.partials.adminmenu')
</div>
@endsection 