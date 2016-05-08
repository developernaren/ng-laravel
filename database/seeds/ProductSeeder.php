<?php

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Faker\Factory::create('ne_NP');
        $productNameArr = []; $productName = $faker->words( 3, 1 );
        while( in_array( $productName, $productNameArr ) ) {

            $productName = $faker->word;
        }
        $productNameArr[] = $productName;


        for( $i = 0; $i <= 10; $i++ ) {


            Product::create([
                'name' => $productName,
                'price' => $faker->randomFloat(),
                'slug' => str_slug( $productName ),
                'description' => $faker->sentence

            ]);

        }



    }
}
