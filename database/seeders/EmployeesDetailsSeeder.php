<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class EmployeesDetailsSeeder extends Seeder
{
    
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 20) as $index){
            DB::table('employess_details')->insert([
                'id' => $faker->number,
                'uuid_fk' => $faker->number,
                'experience' => $faker->numberBetween(1, 10),
                'job_tittle' => $faker->name,
                'job_desc' => $faker->sentence,
            ]);
        }
    }
}
