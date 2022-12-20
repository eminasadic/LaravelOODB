<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Patient;
use Carbon\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    protected $model= Patient::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=> $this->faker->name(),
            'lastname'=> $this->faker->lastname(),
            'birth'=> $this->faker->dateTimeBetween($startDate='-60 years', $endDate='-10 years',$timezone=null),
            'bloodType'=> $this->faker->randomElement(['A+','A-','B+','B-','AB+','AB-','0+','0-']),
            'disease'=> $this->faker->numberBetween(1,20),

        ];
    }
}
