<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'user01',
                'email' => 'user01@gmail.com',
                'birthday' => '1980/11/22',
            ],
            [
                'name' => 'user02',
                'email' => 'user02@gmail.com',
                'birthday' => '1980/11/22',
            ],
            [
                'name' => 'user03',
                'email' => 'user03@gmail.com',
                'birthday' => '1980/11/22',
            ]

        ]);
    }
}
