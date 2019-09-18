<?php

use Illuminate\Database\Seeder;

use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
// 「use」:「require_once」のようなもの

class DiariesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $diaries = [
            [
                'title'=>'初めてのセブ',
                'body'=>'PS日本に忘れた',
            ],
            [
                'title'=>'週末のオスロブ',
                'body'=>'ジンベイザメでか'
            ],
            [
                'title'=>'卒業',
                'body'=>'パスポート寮に忘れたw'
            ]
        ];

        foreach($diaries as $diary){
            // DBにデータを登録する
            DB::table('diaries')->insert([
                'title'=>$diary['title'],
                'body'=>$diary['body'],
                'created_at'=>Carbon::now(),
                'updated_at'=>Carbon::now(),
            ]);
        }
    }
}
