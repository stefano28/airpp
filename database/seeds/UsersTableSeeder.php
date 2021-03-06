<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'name' => 'stefano',
                'email' => 'stefano@airpp.it',
                'password' => bcrypt('airpp'),
                'code' => '1234',
                'role' => 'master'
            ],
            [
                'name' => 'hey',
                'email' => 'hey@airpp.it',
                'password' => bcrypt('1234'),
                'code' => '1234',
                'role' => 'user'
            ]
        ]);

    }
}
