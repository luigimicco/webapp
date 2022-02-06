<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\User;
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


        $new_user = new User();
        $new_user->nome = 'admin';
        $new_user->cognome = 'admin';
        $new_user->email = 'admin@cartesio.it';
        $new_user->password = bcrypt('password');
        $new_user->active = true;
        $new_user->save();
        $new_user->roles()->attach(1);

        $new_user = new User();
        $new_user->nome = 'Mario';
        $new_user->cognome = 'Rossi';  
        $new_user->email = 'utente@cartesio.it';
        $new_user->password = bcrypt('password');
        $new_user->active = true;
        $new_user->save();
        $new_user->roles()->attach(2);


        $roles_id = Role::pluck('id')->toArray();
        unset($roles_id[0]);  // i casuali non possono essere admin

        for ($i = 0; $i < 15; $i++) {
            $new_user = new User();
            $new_user->nome = $faker->firstName();
            $new_user->cognome = $faker->lastName();              
            $new_user->email = $faker->email();
            $new_user->password = bcrypt($faker->word());
            $new_user->active = $faker->boolean();
            $new_user->save();

            $new_user->roles()->attach(Arr::random($roles_id));
        }

    }
}
