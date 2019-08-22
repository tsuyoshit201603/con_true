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
        $param = [
            'name' => '山田太郎',
            'email' => 'taro@yamada.jp',
            'password' => 'testtest',
        ];
        DB::table('users')->insert($param);

        $param = [
            'name' => '山田株式会社',
            'email' => 'kaisya@yamada.co.jp',
            'password' => 'testtest',
        ];
        DB::table('users')->insert($param);
    }
}
