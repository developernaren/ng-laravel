<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = \Faker\Factory::create('ne_NP');
        $userNameArr = [];

        for( $i = 0; $i <= 10; $i++ ) {

            $userName = $faker->firstName ." " . $faker->lastName;
            while( in_array( $userName, $userNameArr ) ) {

                $userName = $faker->firstName ." " . $faker->lastName;
            }
            $userNameArr[] = $userName;


            \App\Models\User::create([
                'name' => $userName,
                'email' => $faker->email,
                'password' => bcrypt('password')
            ]);
        }
    }
}
