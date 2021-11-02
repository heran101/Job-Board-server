<?php

namespace Database\Factories;

use App\Models\InterestedJobType;
use App\Models\JobCategory;
use App\Models\JobSeeker;
use Illuminate\Database\Eloquent\Factories\Factory;

class InterestedJobTypeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = InterestedJobType::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'job_category_id'=>JobCategory::all()->random()->id,
            'job_seeker_id'=>JobSeeker::all()->random()->id,
        ];
    }
}
