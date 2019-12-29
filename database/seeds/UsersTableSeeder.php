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
    	for($i=1;$i<30;$i++)
          DB::table('users')->insert([
            'name' => 'admod',
            'email' => 'admod'.$i.'@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 2

        ]);
        //     DB::table('users')->insert([
        //     'name' => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('abc'),
        //     'role' => 1
        // ]);
    }
}
