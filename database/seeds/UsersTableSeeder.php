<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Membership;
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
        Membership::truncate();

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

        $users = factory(User::class, 50)->create();

        foreach ($users as $user) {
            $membership = new Membership;
            $membership->user()->associate($user);
            $membership->clan()->associate(Clan::find($faker->numberBetween(1, 3)));
            $membership->save();
        }
        
        DB::table('memberships')->insert([
            'clan_id' => '1',
            'user_id' => '1'
        ]);

        DB::table('memberships')->insert([
            'clan_id' => '3',
            'user_id' => '1'
        ]);

        DB::table('memberships')->insert([
            'clan_id' => '3',
            'user_id' => '2'
        ]);
    }
}
