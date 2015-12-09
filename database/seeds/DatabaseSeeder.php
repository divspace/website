<?php

use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

    public function run() {
        $faker = Faker::create();

        Model::unguard();

        foreach(range(1, 20) as $index) {
            DB::table('users')->insert([
                'name' => $faker->name,
                'role' => 'employee',
                'email' => $faker->email,
                'phone' => rand(1111111111, 9999999999),
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);

            DB::table('shifts')->insert([
                'user_id' => $index,
                'break' => $faker->randomFloat(3, 0.15, 2),
                'start_time' => $faker->dateTime,
                'end_time' => $faker->dateTime,
                'created_at' => $faker->dateTime,
                'updated_at' => $faker->dateTime
            ]);
        }

        Model::reguard();
    }

}
