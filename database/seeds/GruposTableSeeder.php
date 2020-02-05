<?php

use Illuminate\Database\Seeder;

class GruposTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(env('APP_ENV') != 'production') {
<<<<<<< HEAD:database/seeds/GruposTableSeeder.php
            DB::table('grupos')->truncate();
            // Creacion de 20 App\Grupo instances...
            $grupo = factory(App\Grupo::class, 20)->create();
=======
            DB::table('aulas')->truncate();
            $aulas = factory(\App\Aula::class, 20)->create();
>>>>>>> corregido v2:database/seeds/AulasTableSeeder.php
        }
    }
}
