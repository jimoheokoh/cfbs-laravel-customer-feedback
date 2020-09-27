<?php

namespace App\Http\Controllers\Feedback;

use App\Models\FormQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FormQuestionsResponseField;

class FormQuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = FormQuestion::orderBy('question_order','asc')->paginate(10);
        return view('feedback.admin.questions.index', ['questions' => $questions]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('feedback.admin.questions.create', ['responseFields' => FormQuestionsResponseField::orderBy('id', 'asc')->get()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $record = new FormQuestion;
        $record->question = $request->input('question');
        $record->question_order = $request->input('question_order');
        $record->response_type_id = $request->input('response_type_id');
        $record->required = $request->input('required');
        $record->save();
        return redirect()->route('questions.index')->withMessage('Question Saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormQuestion  $formQuestion
     * @return \Illuminate\Http\Response
     */
    public function show(FormQuestion $formQuestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormQuestion  $formQuestion
     * @return \Illuminate\Http\Response
     */
    public function edit(FormQuestion $formQuestion, $id)
    {
        return view('feedback.admin.questions.edit', ['editQuestion' => $formQuestion->whereId($id)->firstOrFail(), 'responseFields' => FormQuestionsResponseField::orderBy('id', 'asc')->get()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormQuestion  $formQuestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormQuestion $formQuestion, $id)
    {
        $record = $formQuestion->whereId($id)->firstOrFail();
        $record->question = $request->input('question');
        $record->question_order = $request->input('question_order');
        $record->response_type_id = $request->input('response_type_id');
        $record->required = $request->input('required');
        $record->save();
        return redirect()->route('questions.index')->withMessage('Question Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormQuestion  $formQuestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormQuestion $formQuestion, $id)
    {
        $formQuestion->whereId($id)->firstOrFail()->delete();
        return redirect()->route('questions.index')->withMessage('Question Deleted!');
    }
}
