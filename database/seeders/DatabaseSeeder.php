<?php

namespace Database\Seeders;

use App\Models\Applicant;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            PrefectureSeeder::class,
            UserSeeder::class,
            OwnerSeeder::class,
            JobSeeder::class,
            ApplicantSeeder::class
        ]);
    }
}
