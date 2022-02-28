<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use App\Models\UserInfo;
use Faker\Generator as Faker;

class User_InfosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        $users = User::all();
        for ($i = 0; $i < count($users); $i++) {
            $new_UserInfo = new UserInfo();
            $new_UserInfo->user_id = $i + 1;
            $new_UserInfo->ruolo = $faker->text(50);
            $new_UserInfo->costo_orario = rand(1, 1000)/100;

            $new_UserInfo->save();
        }
    }
}
