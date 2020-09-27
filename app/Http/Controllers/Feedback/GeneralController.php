<?php

namespace App\Http\Controllers\Feedback;

use Carbon\Carbon;
use App\Mail\FeedbackMail;
use App\Models\FormQuestion;
use App\Models\FormResponse;
use Illuminate\Http\Request;
use App\Mail\FeedbackRequestMail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Models\FormResponsesUserInfo;

class GeneralController extends Controller
{
    /**
     * Show the feedback form to the user
     *
     */
    public function index()
    {
        return view('feedback.form', ['data' => FormQuestion::orderBy('question_order','asc')->get()]);
    }
    /**
     * Store the form response in storage and email admin.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postForm(Request $request)
    {
        $userInfo = new FormResponsesUserInfo();
        $userInfo->name = $request->input('name');
        $userInfo->email = $request->input('email');
        $userInfo->phone = $request->input('phone');
        $userInfo->session_code = Carbon::now()->format('YmdHisu');
        $userInfo->save();

        foreach ($request->input('data') as $id=>$field) { 
            $userResponse = new FormResponse();
            $userResponse->form_responses_user_info_id = FormResponsesUserInfo::whereSessionCode($userInfo->session_code)->firstOrFail()->id;
            $userResponse->form_question_id = $field['question'];
            $userResponse->response = $field['response'];
            $userResponse->save();
        }
        $responses = FormResponse::where('form_responses_user_info_id',$userResponse->form_responses_user_info_id)->get();
        Mail::to(config('feedback.send_email_to'))->queue(
            new FeedbackMail('Dear Admin, You have a new client/user feedback. Login to your dashboard here '. route('questions.index').' to check it'));

        return view('feedback.summary', ['user' => $userInfo,'responses' => $responses]);
    }
    
    /**
     * form for Admin to send request for feedback
     *
     */
    public function requestFeedback()
    {
        return view('feedback.admin.request', 
        [
            'message' => 'Dear Esteemed Customer,

This is an invitation to share your feedback on your recent Service experience at our company- '. config('app.name') .', and we\'d love to hear from you via a very short Survey or a Feed Back Note.
            
Any feedback you can provide would be greatly appreciated, as that will help us to serve you better in future
            
Thank you for your business
            
If you have any additional questions, please contact us:
            
Start Survey / Share Feedback -> '.route('feedback.form').'
            
Yours Sincerely,
CEO,
'.config('app.name')
        ]);
    }

    /**
     * send email to recipient requesting feedback.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function sendRequest(Request $request)
    {
        Mail::to($request->input('email'))->send(
        new FeedbackRequestMail(nl2br($request->input('message'))));

        return view('feedback.admin.request', ['message' => $request->input('message'), 'success' => True]);
    }
    
}
