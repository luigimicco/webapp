<?php

use App\Models\User;
use App\Models\Role;
use App\Models\Permission;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use Illuminate\Support\Arr;

class UsersSeeder extends Seeder
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
        $new_user->email = 'admin@webapp.it';
        $new_user->password = bcrypt('password');
        $new_user->active = true;
        $new_user->save();
        $new_user->roles()->attach(1);
        $new_user->permissions()->attach(1);

        $new_user = new User();
        $new_user->nome = 'Mario';
        $new_user->cognome = 'Rossi';  
        $new_user->email = 'utente@webapp.it';
        $new_user->password = bcrypt('password');
        $new_user->active = true;
        $new_user->save();
        $new_user->roles()->attach(2);
        $new_user->permissions()->attach(2);

        $new_user = new User();
        $new_user->nome = 'Luigi';
        $new_user->cognome = 'Bianchi';  
        $new_user->email = 'cliente@webapp.it';
        $new_user->password = bcrypt('password');
        $new_user->active = true;
        $new_user->save();
        $new_user->roles()->attach(3);
        $new_user->permissions()->attach(3);


        $roles_ids = Role::pluck('id')->toArray();
        unset($roles_ids[0]);  // i casuali non possono essere admin
        $permissions_ids = Permission::pluck('id')->toArray();
        unset($permissions_ids[0]);  // i casuali non possono avere i permsssi completi

        for ($i = 0; $i < 15; $i++) {
            $new_user = new User();
            $new_user->nome = $faker->firstName();
            $new_user->cognome = $faker->lastName();              
            $new_user->email = $faker->email();
            $new_user->password = bcrypt($faker->word());
            $new_user->active = $faker->boolean();
            $new_user->save();

            $new_user->roles()->attach(Arr::random($roles_ids));
            $new_user->permissions()->attach(Arr::random($permissions_ids));
        }

    }
}


// $new_user->roles()-attach(Arr::random($roles_ids, rand(1, count($roles_ids)))); 
// 