<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormQuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('form_questions')
        ->insert([
            ['question' => 'How would you rate your experience with our services in respect to the last shipment (1 Very Poor - 10 Excellent )', 'question_order' => 1, 'response_type_id' => 6, 'created_at' => Carbon::now()],

            ['question' => 'Why did you rate us as above?', 'question_order' => 2, 'response_type_id' => 2, 'created_at' => Carbon::now()],

            ['question' => 'How would you rate our communication? (1 Very Poor - 10 Excellent )', 'question_order' => 3, 'response_type_id' => 6, 'created_at' => Carbon::now()],
        ]);
    }
}
