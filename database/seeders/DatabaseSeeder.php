<?php

namespace Database\Seeders;

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

        \App\Models\Employer::factory(10)->create();
        \App\Models\User::factory(10)->create();
        \App\Models\JobCategory::factory(10)->create();
        \App\Models\Job::factory(10)->create();
        \App\Models\UserSetting::factory(10)->create();
        \App\Models\JobSeeker::factory(10)->create();
        \App\Models\InterestedJobType::factory(10)->create();

    }
}
