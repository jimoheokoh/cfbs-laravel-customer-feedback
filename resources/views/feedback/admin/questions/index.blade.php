@section('title') 
Questions List
@endsection 
@extends('feedback.layouts.base')
@section('content')
@include('feedback.layouts.partials.passwordchecker')
<div class="modal__content">            
    <h4 class="text-center">Feedback Form Questions</h4>
    <div class="alert alert-secondary">
        Here are the added ones:
    </div>
    @include('feedback.layouts.partials.message')
    <div class="row">
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-striped table-hover table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th>Question</th>
                            <th>Type</th>
                            <th>Created</th>
                        </tr>
                    </thead>
                    <tbody style="font-size: small;">
                    @foreach($questions as $question)
                        <tr>
                            <td>{{$question->question_order}}) {{$question->question}} @if($question->required == 1) * @endif
                                <form action="{{route('questions.destroy',[$question->id])}}" method="post">
                                @method('DELETE')
                                @csrf
                                <input type="hidden" name="id" value="{{$question->id}}">
                                <a href="{{route('questions.edit',[$question->id])}}" class="btn btn-link"><small>Edit</small></a>
                                <button type="submit" class="btn btn-link" onclick="return confirm('Are you sure?')"><small>Delete</small></button>
                                </form>
                            </td>
                            <td>{{$question->response_type->field_type}}</td>
                            <td>{{$question->created_at->format('F j, Y')}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <small>* - required</small><br>
            <a href="{{route('questions.create')}}" class="btn btn-primary">Add Questions</a><br>
            {{ $questions->links() }}
        </div>
    </div>
    <br>
    @include('feedback.layouts.partials.adminmenu')
</div>
@endsection