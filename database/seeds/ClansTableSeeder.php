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

        DB::table('clan_user')->insert([
            'clan_id' => '1',
            'user_id' => '1'
        ]);

        DB::table('clan_user')->insert([
            'clan_id' => '3',
            'user_id' => '1'
        ]);
    }
}
