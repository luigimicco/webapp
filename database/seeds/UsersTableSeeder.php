<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\User;
use Illuminate\Support\Arr;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $roles_id = Role::pluck('id')->toArray();

        $new_user = new User();
        $new_user->name = 'admin';
        $new_user->email = 'luigi.micco@gmail.com';
        $new_user->password = bcrypt('password');
        $new_user->save();

        $new_user->roles()->attach(1);

        for ($i = 0; $i < 15; $i++) {
            $new_user = new User();
            $new_user->name = $faker->userName();
            $new_user->email = $faker->email();
            $new_user->password = bcrypt($faker->word());
            $new_user->save();

            $new_user->roles()->attach(Arr::random($roles_id));
        }
    }
}
