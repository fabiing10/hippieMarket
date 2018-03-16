<?php

use Illuminate\Database\Seeder;

class CodesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $faker = Faker\Factory::create();

      $limit = 73;

      for ($i = 1; $i < $limit; $i++) {
          DB::table('codes')->insert([ //,
              'code' => $faker->randomNumber(5),
              'carpa' => $i,
              'status' => false,
          ]);
      }

    }
}
