<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormResponse extends Model
{
    use HasFactory;
    protected $dates = ['created_at'];
    
    /**
     * Get the user that owns the response.
     */
    public function form_responses_user_info()
    {
        return $this->belongsTo('App\Models\FormResponsesUserInfo');
    }

    /**
     * Get the question that triggered the response.
     */
    public function form_question()
    {
        return $this->belongsTo('App\Models\FormQuestion');
    }
}
