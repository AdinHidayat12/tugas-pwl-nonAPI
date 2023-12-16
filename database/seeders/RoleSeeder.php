<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    
    public function run(): void
    {
        $roles = ['Anggota', 'Pustakawan', 'Admin'];

        foreach ($roles as $key => $role){
            \Spatie\Permission\Models\Role::create (['name'=> $role]);
        }
    }
}
