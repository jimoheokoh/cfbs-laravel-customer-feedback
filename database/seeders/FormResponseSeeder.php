<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FormResponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* DB::table('form_responses')
        ->insert([
            ['form_responses_user_info_id' => 1, 'form_question_id' => 1, 'response' => '9', 'created_at' => Carbon::now()],
            ['form_responses_user_info_id' => 1, 'form_question_id' => 2, 'response' => 'I was particularly impressed with the delivery speed', 'created_at' => Carbon::now()],
            ['form_responses_user_info_id' => 1, 'form_question_id' => 3, 'response' => '8', 'created_at' => Carbon::now()],
        ]); */
    }
}
