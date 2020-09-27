@section('title') 
User Feedbacks
@endsection 
@extends('feedback.layouts.base')
@section('content')
@include('feedback.layouts.partials.passwordchecker')
<div class="modal__content">            
    <h4 class="text-center">User Responses</h4>
    <div class="alert alert-secondary">
        Here are the recent ones:
    </div>
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>#</th>
                            <th>Client</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: small;">
                    @foreach($feedbacks as $feedback)
                        <tr>
                            <td><a href="{{route('responses.show',[$feedback->id])}}">{{$feedback->session_code}}</a></td>
                            <td>{{$feedback->name}}</td>
                            <td>{{$feedback->created_at->diffForHumans()}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            {{ $feedbacks->links() }}
        </div>
    </div>
    <br>
    @include('feedback.layouts.partials.adminmenu')
</div>
@endsection