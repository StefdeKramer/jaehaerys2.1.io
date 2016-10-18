<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_user = Role::where('name', 'User')->first();
        $role_admin = Role::where('name', 'Admin')->first();

        $user = new User();
        $user->name = 'Victor';
        $user->email = 'user@hotmail.com';
        $user->password = bcrypt('user');
        $user->save();
        $user->roles()->attach($role_user);
        
        $admin = new User();
        $admin->name = 'Lilly';
        $admin->email = 'admin@hotmail.com';
        $admin->password = bcrypt('admin');
        $admin->save();
        $admin->roles()->attach($role_admin);


    }
}
