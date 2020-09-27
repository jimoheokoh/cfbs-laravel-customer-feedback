@section('title') 
Create New Question
@endsection 
@extends('feedback.layouts.base')
@section('content')
@include('feedback.layouts.partials.passwordchecker')
<div class="modal__content">            
    <h4 class="text-center">Feedback Add Questions</h4>
    @include('feedback.layouts.partials.message')
    <hr>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route('questions.store')}}">
            @csrf
            <ul class="form-list">
                <li class="form-list__row">
                    <label>Question:</label>
                    <textarea name="question" cols="30" rows="3" required></textarea>
                </li>
                <li class="form-list__row">
                    <label>Response Field Type:</label>
                   <select name="response_type_id">
                       @foreach($responseFields as $rf)
                       <option value="{{$rf->id}}">{{$rf->field_type}}</option>
                       @endforeach
                   </select>
                </li>
                <li class="form-list__row">
                    <label>Order of Arrangement:</label>
                    <input type="number" name="question_order" pattern="\d*" minlength="1" maxlength="2" required placeholder="(numbers only)" />
                </li>
                <li class="form-list__row">
                    <label>Question Importance:</label>
                    <select name="required">
                        <option value="1">Required</option>
                        <option value="0">Optional</option>
                    </select>
                </li>
                <li>
                <button type="submit" class="button">Submit</button>
                </li>
            </ul>
            </form>
            <a href="{{route('questions.index')}}" class="btn btn-secondary">&laquo; Back</a><br>
        </div>
    </div>
    <br>
    @include('feedback.layouts.partials.adminmenu')
</div>
@endsection