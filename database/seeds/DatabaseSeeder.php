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
        factory(App\User::class,10)->create();
        factory(App\Song::class,40)->create();
        // $this->call(UsersTableSeeder::class);
    }

}
