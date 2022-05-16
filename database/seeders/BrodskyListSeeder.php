<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrodskyListSeeder extends Seeder
{
    public function run()
    {
        DB::table('brodsky_list')->insert([
            [
                'title' => '«Бхагавадгита»',
                'author' => ''
            ],
            [
                'title' => '«Махабхарата»',
                'author' => ''
            ],
            [
                'title' => '«Эпос о Гильгамеше»',
                'author' => ''
            ],
            [
                'title' => '«Ветхий Завет»',
                'author' => ''],
            [
                'title' => '«Иллиада», «Одиссея»',
                'author' => 'Гомер'
            ],
            [
                'title' => '«История»',
                'author' => 'Геродот'
            ],
            [
                'title' => 'Пьесы',
                'author' => 'Софокл'
            ],
            [
                'title' => 'Пьесы',
                'author' => 'Эсхтил'
            ],
            [
                'title' => 'Пьесы: «Ипполит», «Вакханки», «Электра», «Финикиянки»',
                'author' => 'Эврипид'
            ],
            [
                'title' => '«История Пелопоннесской войны»',
                'author' => 'Фукидид'
            ],
            [
                'title' => '«Диалоги»',
                'author' => 'Платон'
            ]
        ]);
    }
}
