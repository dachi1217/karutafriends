<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        'cards_id' => '1',
        'name' => 'test',
        'email' => 'test@test.com',
        'password' =>bcrypt('testtest'),
        'user_profile' =>'test',
        'user_belongs' =>'test',
        'user_class' => 'test',
        
        ]);
    }
}
