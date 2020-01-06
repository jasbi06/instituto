<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if(env('ENV') != 'production') {
            \Illuminate\Support\Facades\DB::table('users')->truncate();
            $users = factory(App\User::class, 3)->create();
        }
    }
}
