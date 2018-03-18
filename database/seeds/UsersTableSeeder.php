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
        ]);
    }
}
