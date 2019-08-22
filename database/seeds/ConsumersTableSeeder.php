<?php

use Illuminate\Database\Seeder;

class ConsumersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'user_id' => 1,
            'age' => 21,
            'job' => '無職',
            'phone_num' => 9012345678,
            'text' => '面白いアイデア考えます！よろしくお願いします。',
        ];
        DB::table('consumers')->insert($param);
    }
}
