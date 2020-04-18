<?php

use Illuminate\Database\Seeder;
use App\SecurityQuestion;

class SecurityQuestionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SecurityQuestion::create(['question' => 'street_name']);
        SecurityQuestion::create(['question' => 'primary_school']);
        SecurityQuestion::create(['question' => 'first_job']);
        SecurityQuestion::create(['question' => 'first_car']);
        SecurityQuestion::create(['question' => 'oldest_cousin']);
    }
}
