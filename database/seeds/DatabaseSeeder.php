<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //usuarios admin
        \App\Models\UsuarioAdministrador::create(array(
            'primer_nombre' => 'Admin',
            'primer_apellido' => 'Canal Pasarela',
            'email' => 'admin@admin.com',
            'password' => Hash::make('123456789') // Hash::make() nos va generar una cadena con nuestra contraseña encriptada
        ));

        //estados de vehiculo

        \App\Models\PrmEstado::create(array(
            'id' => 1,
            'estado' => 'Transacción Pendiente',
            'definicion' => 'jhdsjkdkahsDKHaksjhajkhSJKahskhaSH',
        ));
        \App\Models\PrmEstado::create(array(
            'id' => 2,
            'estado' => 'Transacción aprobada ',
            'definicion' => 'jhdsjkdkahsDKHaksjhajkhSJKahskhaSH',
        ));
        \App\Models\PrmEstado::create(array(
            'id' => 3,
            'estado' => 'Transacción rechazada',
            'definicion' => 'Transacción rechazada por la pasarela de pagos',
        ));
        \App\Models\PrmEstado::create(array(
            'id' => 4,
            'estado' => 'Transacción invalida',
            'definicion' => 'Transacción invalida por el Databank',
        ));

        \App\Models\PrmEstado::create(array(
            'id' => 5,
            'estado' => 'Transacción notificada',
            'definicion' => 'jhdsjkdkahsDKHaksjhajkhSJKahskhaSH',
        ));
        // $this->call(UsersTableSeeder::class);
    }
}
