<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormResponsesUserInfo extends Model
{
    use HasFactory;
    /**
     * Get the response that that is associated with the user.
     */
    public function form_responses()
    {
        return $this->hasMany('App\Models\FormResponse');
    }
}
