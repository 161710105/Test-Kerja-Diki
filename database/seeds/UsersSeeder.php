<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [

        	[
        		'name'=>'user',
        		'email'=>'user@gmail.com',
        		'password'=>bcrypt('user123'),
        	]
        ];

        User::insert($data);
    }
}
