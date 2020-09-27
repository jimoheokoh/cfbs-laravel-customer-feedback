<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormQuestionsResponseFieldSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form_questions_response_fields')->insert([
            ['field_type' => 'textbox'],
            ['field_type' => 'textarea'],
            ['field_type' => 'date'],
            ['field_type' => 'email'],
            ['field_type' => 'number'],
            ['field_type' => 'range'],
        ]);
    }
}
