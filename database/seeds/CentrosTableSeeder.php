<?php

use Illuminate\Database\Seeder;

class CentrosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (env('APP_ENV') != 'production') {
            DB::table('centros')->truncate();
            // Create 3 App\User instances...
            $centros = factory(App\Centro::class, 3)->create();
        }
    }
}
