<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            'articles_title' => 'test',
            'articles_body' => 'test',
            'user_id' =>'1',
            
            ]);
    }
}
