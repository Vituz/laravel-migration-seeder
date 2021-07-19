<?php

use App\Pack;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class PackSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {
            $pack = new Pack();
            $pack->image = $faker->imageUrl(640, 480, 'city', true);
            $pack->name = $faker->sentence();
            $pack->city = $faker->city();
            $pack->description = $faker->paragraph();
            $pack->price = $faker->randomFloat(2, 100, 600);
            $pack->date = $faker->date();

            $pack->save();
        }
    }
}
