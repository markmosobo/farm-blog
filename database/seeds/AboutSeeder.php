<?php

use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('about')->insert([
            'sub_title' => 'About the farming app',
            'body' => 'Welcome.This is a tool to integrate all farming activities within the small scale farmers into a simple 
                        application that manages the economics, farm tools and labour-related financial implications
                         incurred from the same.The software can be used to monitor progress of crop production from
                          the planting season to harvesting period all with the cost implications appended.The consistent
                          record keeping allows for better and swifter assessment of what farmers are doing and a blog creates
                          a platform upon which more farmers can share their ideas, stories and even futile attempts at new
                          methods of farming.Any farmer can sign up and get updates apart from feeling free to share their
                           own success stories of successes and failures within both subsistence and cash crop farming. '
        ]);
    }
}
