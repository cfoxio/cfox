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

        $faker = Faker::create();

        DB::table('users')->insert([
            'name' => 'cfox',
            'slug' => str_slug('cfox', '-'),
            'email' => 'cfox@cfox.io',
            'password' => bcrypt('testtest'),
            'language' => 'en',
            'birthday' => $faker->dateTimeBetween('-50 years', '-15 years'),
            'steam' => '76561198052422727'
        ]);
        DB::table('users')->insert([
            'name' => 'sp4m',
            'slug' => str_slug('sp4m', '-'),
            'email' => 'sp4m@cfox.io',
            'password' => bcrypt('testtest'),
            'language' => 'de',
            'birthday' => $faker->dateTimeBetween('-50 years', '-15 years'),
            'steam' => '76561198052422727'
        ]);
        DB::table('users')->insert([
            'name' => 'Degrad21',
            'slug' => str_slug('degrad21', '-'),
            'email' => 'degrad21@nordicsoldiekneipe.de',
            'password' => bcrypt('testtest'),
            'language' => 'de',
            'birthday' => $faker->dateTimeBetween('-50 years', '-15 years'),
            'steam' => '76561198073219400'
        ]);
        DB::table('users')->insert([
            'name' => 'sonix',
            'slug' => str_slug('sonix', '-'),
            'email' => 'sonix@nordicsoldiekneipe.de',
            'password' => bcrypt('testtest'),
            'language' => 'de',
            'birthday' => $faker->dateTimeBetween('-50 years', '-15 years'),
            'steam' => '76561198133691098'
        ]);

        $users = factory(User::class, 50)->create()->each(function($u) {
            $u->clans()->attach(Clan::find(1));
        });
    }
}
