<?php

use Illuminate\Database\Seeder;

class userSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Fake\factory::create('nl_NL');

        for($i = 0; $i < 50; $i++) {
            App\User::create(
            [
                'name' => Faker->unique()->name,
                'email' => $i . Faker->unique()->email,
                'password' => Hash::make('secret')
            ]
            );
        }
    }
}
