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
        $this->call(UserSeeder::class);
        $this->call(Ac_categorySeeder::class);
        $this->call(ScriptSeeder::class);
        $this->call(Ac_user_categorySeeder::class);

    }
}
