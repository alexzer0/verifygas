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
        //
        $role_administrador= Role::where('name','administrador')->first();
        $role_taller= Role::where('name','taller')->first();
        $role_calidda= Role::where('name','calidda')->first();

        $administrador = new User();
        $administrador->name = 'admin';
        $administrador->email = 'administrador@verifygas.com';
        $administrador->password = bcrypt('secret');
        $administrador->save();
        $administrador->roles()->attach($role_administrador);
        
        $taller = new User();
        $taller->name = 'taller 1';
        $taller->email = 'taller@verifygas.com';
        $taller->password = bcrypt('secret');
        $taller->save();
        $taller->roles()->attach($role_taller);

        $calidda = new User();
        $calidda->name = 'calidda 1';
        $calidda->email = 'calidda@verifygas.com';
        $calidda->password = bcrypt('secret');
        $calidda->save();
        $calidda->roles()->attach($role_calidda);
    }
}
