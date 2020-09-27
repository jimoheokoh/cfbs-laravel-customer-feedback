<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormQuestionsResponseField extends Model
{
    use HasFactory;
    /**
     * Get the question that that is associated with the response type field.
     */
    public function form_question()
    {
        return $this->hasOne('App\Models\FormQuestion');
    }

}
