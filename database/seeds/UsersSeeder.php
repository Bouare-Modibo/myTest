<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){

        DB::table('users')->insert([

            [
                'name' => 'Modibo Bouare',
                'email' => 'b@gmail.com',
                'status' => 'Enable/Not Locked',
                'password' => bcrypt('1234'),
                'is_admin' => '1'
            ],

            [
                'name' => 'Bouare Modibo',
                'email' => 'm@gmail.com',
                'status' => 'Disabled/Locked',
                'password' => bcrypt('1234'),
                'is_admin' => '0'
            ]

            ]);
        
    }
}
