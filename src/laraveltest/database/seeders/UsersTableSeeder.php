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
                'birthday' => '19801122',
                'email' => 'user01@gmail.com',
                'birthday' => '2000/01/01'
            ],
            [
                'name' => 'user02',
                'birthday' => '19801122',
                'email' => 'user02@gmail.com',
                'birthday' => '2000/02/02'
            ],
            [
                'name' => 'user03',
                'birthday' => '19801122',
                'email' => 'user03@gmail.com',
                'birthday' => '2000/03/03'
            ]

        ]);
    }
}
