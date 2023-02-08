<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
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
                'name' => 'test1',
                'age' => '19',
                'gender' => '0',
                'email' => 'test1@test.com',
                'prefectures_id' => '1',
                'municipalities' => 'testtest1',
                'current_job' => '1',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'test2',
                'age' => '20',
                'gender' => '1',
                'email' => 'test2@test.com',
                'prefectures_id' => '2',
                'municipalities' => 'testtest2',
                'current_job' => '2',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'test3',
                'age' => '30',
                'gender' => '0',
                'email' => 'test3@test.com',
                'prefectures_id' => '3',
                'municipalities' => 'testtest3',
                'current_job' => '3',
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
