<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Db::table('games')->insert([
            'title' => 'Tekken7',
            'description' => 'Game Gelud',
            'price' => '399000',
            'release_date' => Carbon::createFromDate(2017, 7, 2),
            'developer' => 'Bandai Namco'
        ]);
    }
}
