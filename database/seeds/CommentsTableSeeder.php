<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'articles_id' => '1',
            'user_id' => '1',
            'comment' =>'test',
            
            ]);
    }
}
