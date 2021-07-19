<?php

use App\Menu;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 6; $i++) {
            $item = new Menu();
            $item->title = $faker->domainWord();
            $item->href = '#';

            $item->save();
        }
    }
}
