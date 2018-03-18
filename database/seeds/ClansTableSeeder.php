<?php

use Illuminate\Database\Seeder;

class ClansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clans')->insert([
            'name' => 'FoXRaiD Gaming',
            'subdomain' => 'foxraid'
        ]);

        DB::table('clans')->insert([
            'name' => 'Turtle eSport',
            'subdomain' => 'turtle-esport'
        ]);

        DB::table('clans')->insert([
            'name' => 'Legarto Industries',
            'subdomain' => 'legarto'
        ]);
    }
}
