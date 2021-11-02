<?php

namespace Database\Factories;

use App\Models\Employer;
use App\Models\Job;
use App\Models\JobCategory;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Job::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->jobTitle,
            'description'=>$this->faker->text,
            'required_years_of_exp'=>rand(1,5),
            'location'=>'Addis Ababa',
            'employer_id'=>Employer::all()->random()->id,
            'job_category_id'=>JobCategory::all()->random()->id,
            'status'=>'Active',
        ];
    }
}
