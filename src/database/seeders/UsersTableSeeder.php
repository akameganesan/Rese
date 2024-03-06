<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;


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

        $param = [
            'name' => 'tony',
            'email' => 'test1@yahoo.co.jp',
            'password' => '1111111A'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'jack',
            'email' => 'test2@yahoo.co.jp',
            'password' => '2222222B'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'sara',
            'email' => 'test2@yahoo.co.jp',
            'password' => '3333333C'
        ];
        DB::table('users')->insert($param);
        $param = [
            'name' => 'saly',
            'email' => 'test4@yahoo.co.jp',
            'password' => '4444444D'
        ];
        DB::table('users')->insert($param);
    }
}



