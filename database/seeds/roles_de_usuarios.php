<?php

use Illuminate\Database\Seeder;

class roles_de_usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
         DB::table('roles')->insert([
            'name' => 'Admin',
            'slug' => 'admin',
            'description' =>'Usuario que puede administrar todas las funcionalidades del sitio web',
            'level' => 1,
        ]);

         DB::table('roles')->insert([
            'name' => 'Vendedor',
            'slug' => 'vendedor',
            'description' =>'Usuario que puede administrar pedidos de sus clientes directos',
            'level' => 2,
        ]);
    }
}
