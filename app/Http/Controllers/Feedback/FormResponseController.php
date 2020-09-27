<?php

namespace App\Http\Controllers\Feedback;

use App\Models\FormResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FormResponsesUserInfo;

class FormResponseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = FormResponsesUserInfo::orderBy('created_at','desc')->paginate(5);
        return view('feedback.admin.responses.index', ['feedbacks' => $feedbacks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FormResponse  $formResponse
     * @return \Illuminate\Http\Response
     */
    public function show(FormResponse $formResponse, $user_info_id)
    {
        return view('feedback.admin.responses.show', 
        [
            'showResponses' => $formResponse->where('form_responses_user_info_id',$user_info_id)->get(), 'user' => FormResponsesUserInfo::whereId($user_info_id)->firstorFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FormResponse  $formResponse
     * @return \Illuminate\Http\Response
     */
    public function edit(FormResponse $formResponse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FormResponse  $formResponse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FormResponse $formResponse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FormResponse  $formResponse
     * @return \Illuminate\Http\Response
     */
    public function destroy(FormResponse $formResponse)
    {
        //
    }
}
