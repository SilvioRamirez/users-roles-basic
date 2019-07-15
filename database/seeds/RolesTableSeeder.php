<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
        	'name' 		=> 'Administrador',
        	'slug' 		=> 'administrador',
        	'special' 	=> 'all-access',
        	'description' => 'Administrador del Sistema.'
        ]);

        Role::create([
            'name'      => 'Usuario',
            'slug'      => 'usuario',
            'description' => 'Usuario del Sistema.'
        ]);
    }
}
