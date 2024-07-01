<?php

namespace Database\Seeders;


use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class rolepermissionsedder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name' => 'superadmin']);

        $permission_data = [
            ['name' => 'user read'],
            ['name' => 'user create'],
            ['name' => 'user edit'],
            ['name' => 'user delete'],

            ['name' => 'role read'],
            ['name' => 'role create'],
            ['name' => 'role edit'],
            ['name' => 'role delete'],


        ];


        foreach ($permission_data as $data) {
            $permission = Permission::create($data);
        }

        $role->syncPermissions(permission::all());




        $user = User::get()->first();
        $user->assignRole($role);


    }
}
