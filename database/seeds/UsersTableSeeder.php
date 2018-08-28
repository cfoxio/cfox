<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Clan;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        DB::table('users')->insert([
            'name' => 'cfox',
            'slug' => str_slug('cfox', '-'),
            'email' => 'cfox@cfox.io',
            'password' => bcrypt('testtest'),
            'language' => 'en',
        ]);
        DB::table('users')->insert([
            'name' => 'sp4m',
            'slug' => str_slug('sp4m', '-'),
            'email' => 'sp4m@cfox.io',
            'password' => bcrypt('testtest'),
            'language' => 'de',
        ]);

        $faker = Faker::create();

        $users = factory(User::class, 50)->create()->each(function($u) {
            $u->clans()->attach(Clan::find(1));
        });
    }
}
