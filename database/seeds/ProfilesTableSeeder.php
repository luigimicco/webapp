<?php

use App\Models\Profile;
use Illuminate\Database\Seeder;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profiles_name = ['completo', 'accettazione', 'laboratorio', 'cliente'];
        foreach ($profiles_name as $profile) {
            $new_profile = new Profile();
            $new_profile->name = $profile;
            $new_profile->active = true;
            $new_profile->save();
        }
    }
}

