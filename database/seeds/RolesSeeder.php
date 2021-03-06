<?php

use App\Models\Role;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $roles_name = ['admin', 'utente', 'cliente'];
        foreach ($roles_name as $role) {
            $new_role = new Role();
            $new_role->name = $role;
            $new_role->color = $faker->hexColor();
            $new_role->save();
        }
    }
}
