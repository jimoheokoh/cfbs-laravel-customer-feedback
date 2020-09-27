<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormQuestion extends Model
{
    use HasFactory;
    protected $dates = ['created_at'];

    /**
     * Get the question response type that owns the question.
     */
    public function response_type()
    {
        return $this->belongsTo('App\Models\FormQuestionsResponseField');
    }

    /**
     * Get the response that that is associated with the question.
     */
    public function form_responses()
    {
        return $this->hasMany('App\Models\FormResponse');
    }
}
