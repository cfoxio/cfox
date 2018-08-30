<?php

use Illuminate\Database\Seeder;
use App\Clan;

class ClansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Clan::truncate();

        DB::table('clans')->insert([
            'name' => 'FoXRaiD Gaming',
            'subdomain' => 'foxraid',
            'country' => 'DE'
        ]);

        DB::table('clans')->insert([
            'name' => 'Turtle eSport',
            'subdomain' => 'turtle-esport',
            'country' => 'DE'
        ]);

        DB::table('clans')->insert([
            'name' => 'Legarto Industries',
            'subdomain' => 'legarto',
            'country' => 'DE'
        ]);

        DB::table('clan_user')->insert([
            'clan_id' => '1',
            'user_id' => '1'
        ]);

        DB::table('clan_user')->insert([
            'clan_id' => '1',
            'user_id' => '2'
        ]);

        DB::table('clan_user')->insert([
            'clan_id' => '1',
            'user_id' => '3'
        ]);

        DB::table('clan_user')->insert([
            'clan_id' => '1',
            'user_id' => '4'
        ]);

        DB::table('clan_user')->insert([
            'clan_id' => '3',
            'user_id' => '1'
        ]);


    }
}
