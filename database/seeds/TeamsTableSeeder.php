<?php

use Illuminate\Database\Seeder;
use App\Clan;
use App\Team;
use App\User;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Team::truncate();
        DB::table('team_user')->truncate();

        factory(Team::class)
            ->create(['name' => 'FoXRaiD Alpha']);

        factory(Team::class)
            ->create(['name' => 'FoXRaiD Origins']);

        factory(Team::class)
            ->create(['name' => 'FoXRaiD Gaming'])
            ->each(function ($t) {
                $t->clan()->associate(Clan::find(1));
                $players = Clan::find(1)->users()
                                        ->random(5);
                $t->users()->attach($players->pluck('id')->toArray());
                $t->teamleader()->associate($players->random(1)->first());
                $t->manager()->associate(Clan::find(1)->users()->random(1)->first());
                $t->save();
            });
    }
}
