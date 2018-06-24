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

    }
}
