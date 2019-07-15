<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create([
        	'name' 			=> 'Navegar usuarios',
        	'slug'			=> 'users.index',
        	'description' 	=> 'Lista y navega todos los usuarios del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de usuario',
        	'slug'			=> 'users.show',
        	'description' 	=> 'Ver en detalle cada usuario del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Edición usuarios',
        	'slug'			=> 'users.edit',
        	'description' 	=> 'Editar cualquier dato de un usuario del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar usuario',
        	'slug'			=> 'users.destroy',
        	'description' 	=> 'Eliminar cualquier usuario del sistema',
        ]);

        //Definicion de Roles
        Permission::create([
        	'name' 			=> 'Navegar roles',
        	'slug'			=> 'roles.index',
        	'description' 	=> 'Lista y navega todos los roles del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Ver detalle de rol',
        	'slug'			=> 'roles.show',
        	'description' 	=> 'Ver en detalle cada rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Edición roles',
        	'slug'			=> 'roles.edit',
        	'description' 	=> 'Editar cualquier dato de un rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Creación roles',
        	'slug'			=> 'roles.create',
        	'description' 	=> 'Crear cualquier dato de un rol del sistema',
        ]);

        Permission::create([
        	'name' 			=> 'Eliminar rol',
        	'slug'			=> 'roles.destroy',
        	'description' 	=> 'Eliminar cualquier rol del sistema',
        ]);

    }
}
