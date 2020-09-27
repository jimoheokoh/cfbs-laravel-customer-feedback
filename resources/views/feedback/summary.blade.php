@section('title') 
User Feedback Summary
@endsection 
@extends('feedback.layouts.base')
@section('content')
<div class="modal__content">            
    <h4 class="text-center">Your Response</h4>
    <div class="alert alert-success">
        Your response has been recorded. Thank you! Here's a summary:
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
                        @foreach($responses as $response)
                        <tr>
                            <td>{{$response->form_question->question}}:</td>
                            <td>{{$response->response}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div> <!-- END: .modal__content -->
@endsection