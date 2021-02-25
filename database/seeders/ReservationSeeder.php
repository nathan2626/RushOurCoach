<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {

            $token = md5(uniqid(true));

            DB::table('reservations')->insert([
                'date_select' => $faker->dateTimeBetween ($startDate = 'now', $endDate = '+1 year')->format('Y-m-d'),
                'hour_select' =>  $faker->time(),
                'email' => $faker->email,
                'token' => $token,
            ]);
        }
    }
}
