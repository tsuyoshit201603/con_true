<?php

use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 2,
            'phone_num' => 687654321,
            'capital' => 1200,
            'type' => '畳の製造',
            'text' => '畳作ってます！よろしくお願いします。'
        ];
        DB::table('businesses')->insert($param);
    }
}
