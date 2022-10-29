<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        $rol=Role::create(['name'=>'Admin']);
        $rol2=Role::create(['name'=>'UserComunidad']);

        Permission::create(['name'=>'usuarioCrud.index'])->assignRole($rol);
        Permission::create(['name'=>'usuarioCrud.create'])->assignRole($rol);
        Permission::create(['name'=>'usuarioCrud.edit'])->assignRole($rol);
        Permission::create(['name'=>'usuarioCrud.destroy'])->assignRole($rol);


        
    }
}
