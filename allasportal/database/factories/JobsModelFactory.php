<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\jobsModel;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class JobFactory extends Factory
{
    protected $model = jobsModel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
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
        return [
            'company' => fake()->company(),
            'position' => ake()->text(),
            'salary' => fake()->number(),
            'description' => fake()->text(),
            'appliedNumber' => fake()->randomNumber(),
        ];
    }
}
