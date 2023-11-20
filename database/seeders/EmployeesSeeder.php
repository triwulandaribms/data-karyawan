<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;


class EmployeesSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index){
            DB::table('employees')->insert([
                'id' => $faker->number,
                'name' => $faker->name,
                'dob' => $faker->date,
                'status' => $faker->randomElement(['Actice', 'Inactive']),
                'join_date' => $faker->date,
            ]);
        }
    }
}
