<?php

namespace Database\Factories;

use App\Models\JobSeeker;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobSeekerFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = JobSeeker::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'fname' => $this->faker->firstName(),
            'lname' => $this->faker->lastName(),
            'image' => 'pic.png',
            'status' => rand(0,1),
            'email' => $this->faker->unique()->safeEmail(),
            'phone' => '+2519'.rand(10000000,99999999),
            'years_of_exp' => rand(0,10)

        ];
    }
}
