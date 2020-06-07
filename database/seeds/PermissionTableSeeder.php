<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /*--------------------------------------------------------------
       Permisos para los usuarios del sistema
       ---------------------------------------------------------------- */
        Permission::create([
            'name' => 'Navegar Usuarios',
            'slug' => 'users.index',
            'description' => 'Lista y navega todos los usuarios del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de usuario',
            'slug' => 'users.show',
            'description' => 'Ver en detalle cada usuario del sistema'
        ]);
        Permission::create([
            'name' => 'Crear un usuario',
            'slug' => 'users.create',
            'description' => 'Crear un usuario en el  sistema'
        ]);
        
        Permission::create([
            'name' => 'Edicion de usuarios',
            'slug' => 'users.edit',
            'description' => 'Editar cualquier dato de un usuario del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar usuario',
            'slug' => 'users.destroy',
            'description' => 'Eliminar cualquier usuario del sistema'
        ]);

        /*-----------------------------------------------------------------*/
        /*------------------------------------------------------------------
        Roles del Sistema
        -------------------------------------------------------------------- */
        Permission::create([
            'name' => 'Navegar  roles',
            'slug' => 'roles.index',
            'description' => 'Lista y navega todos los roles del sistema'
        ]);
        Permission::create([
            'name' => 'Ver detalle de rol',
            'slug' => 'roles.show',
            'description' => 'Ver en detalle cada rol del sistema'
        ]);
        Permission::create([
            'name' => 'Crear un rol',
            'slug' => 'roles.create',
            'description' => 'Crear un rol en el  sistema'
        ]);

        Permission::create([
            'name' => 'Edicion de roles',
            'slug' => 'roles.edit',
            'description' => 'Editar cualquier dato de un rol del sistema'
        ]);
        Permission::create([
            'name' => 'Eliminar rol',
            'slug' => 'roles.destroy',
            'description' => 'Eliminar cualquier rol del sistema'
        ]);
    }
}
