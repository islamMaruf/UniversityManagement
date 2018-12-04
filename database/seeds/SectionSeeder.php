<?php

use Illuminate\Database\Seeder;

class SectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sections')->insert([
            'section_name'=> 'A',
            'course_id'=>1,
            'semester'=>'fall',
            'year'=> '2018'
            ]);
        DB::table('sections')->insert([
            'section_name'=> 'B',
            'course_id'=>2,
            'semester'=>'fall',
            'year'=> '2018'
            ]);



    }
}
