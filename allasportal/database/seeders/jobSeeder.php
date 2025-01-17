<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\jobsModel;
use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Factory as Faker;

class jobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::create('jobs', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('company');
        //     $table->string('position');
        //     $table->integer('salary');
        //     $table->string('description');
        //     $table->integer('appliedNumber');
        //     $table->timestamps();
        // });

        $faker = Faker::create();

        foreach (range(10, 51) as $index) {
            jobsModel::create([
                'company' => $faker->company,
                'position' => $faker->jobTitle,
                'salary' => $faker->randomNumber,
                'description' => substr($faker->paragraph(),0,255),
                'appliedNumber' => $faker->randomNumber,
                'publisher' => $faker->email
            ]);
        }
    }
}
