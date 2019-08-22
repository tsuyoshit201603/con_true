<?php

use Illuminate\Database\Seeder;

class IdeasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'すごい鍋',
            'text' => 'すごい鍋です！よろしくお願いします！',
        ];
        DB::table('ideas')->insert($param);

        $param = [
            'name' => '家事代行サービス',
            'text' => '1000円で家事を代行してくれるサービスです。',
        ];
        DB::table('ideas')->insert($param);
    }
}
