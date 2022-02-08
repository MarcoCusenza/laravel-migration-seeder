<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Travel;


class TravelsTableSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run(Faker $faker)
  {
    for ($i = 0; $i < 100; $i++) {
      $travel = new Travel();
      $travel->name = $faker->sentence(3);
      $travel->destination = $faker->country();
      $travel->duration = $faker->randomNumber(2, false);
      $travel->flight = $faker->numberBetween(0, 1);
      $travel->price_adults = $faker->numberBetween(200, 1000);
      $travel->price_children = $faker->numberBetween(10, 200);
      $travel->save();
    }
  }
}
