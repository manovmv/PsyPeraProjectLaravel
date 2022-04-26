<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Profile;
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
        $doctors = Doctor::factory(50)->create();
        $profiles = Profile::factory( 15)->create();
        foreach ($doctors as $doctor){
            $profilesIds = $profiles->random(5)->pluck('id');
            $doctor->profiles()->attach($profilesIds);
    }
        // \App\Models\User::factory(10)->create();
    }
}
