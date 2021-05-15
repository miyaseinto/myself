<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
            'name' => 'tarodesu',
            'email' => 'tarou@tanaka.jp',
            'age' => 12,
        ];
        DB::table('people')->insert($param);
    }
}
