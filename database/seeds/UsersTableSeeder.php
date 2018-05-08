<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'cfox',
            'email' => 'cfox@cfox.io',
            'password' => bcrypt('testtest'),
            'language' => 'en',
        ]);
        DB::table('users')->insert([
            'name' => 'sp4m',
            'email' => 'sp4m@cfox.io',
            'password' => bcrypt('testtest'),
            'language' => 'de',
        ]);
    }
}
