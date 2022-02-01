<?php

use App\User;
use Illuminate\Database\Seeder;
use App\UserInfo;
use Faker\Generator as Faker;

class User_InfosTableSeeder extends Seeder
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
            $new_UserInfo->address = 'Via inventata';
            // $faker->address();
            $new_UserInfo->phone = $faker->phoneNumber();
            $new_UserInfo->country = 'USA';
            $new_UserInfo->save();
        }
    }
}
