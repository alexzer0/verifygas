<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role_administrador=new Role();
        $role_administrador->name='administrador';
        $role_administrador->description='usuario administrador';
        $role_administrador->save();

        $role_taller=new Role();
        $role_taller->name='taller';
        $role_taller->description='usuario taller';
        $role_taller->save();

        $role_calidda=new Role();
        $role_calidda->name='calidda';
        $role_calidda->description='usuario Calidda';
        $role_calidda->save();
    }
}
