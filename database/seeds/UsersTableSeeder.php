<?php

use Illuminate\Database\Seeder;
use App\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*CREAR Usuario*/
        $admin       = new User;
        $admin->name = 'Federico Yarza';
		$admin->email       = 'federicoyarza295@gmail.com';
		$admin->password    = 'freidnea';
        $admin->save();

        $admin->assignRole(1);

         /*CREAR Usuario*/
         $admin       = new User;
         $admin->name = 'Administrador';
         $admin->email       = 'admin@admin.com';
         $admin->password    = '123456';
         $admin->save();
 
         $admin->assignRole(1);
    }
}
