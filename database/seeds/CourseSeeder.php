<?php

use Illuminate\Database\Seeder;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'course_code' => 'CSE131',
            'course_name' => 'Data Structure',
            'course_credit' => 3
        ]);

    }
}
