<?php

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions_name = ['completo', 'accettazione', 'laboratorio', 'cliente'];
        foreach ($permissions_name as $permission) {
            $new_permission = new Permission();
            $new_permission->name = $permission;
            $new_permission->active = true;
            $new_permission->save();
        }
    }
}

