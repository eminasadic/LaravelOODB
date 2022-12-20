<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Doctor>
 */
class DoctorFactory extends Factory
{
    protected $model= Doctor::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ime'=> $this->faker->name(),
            'prezime'=> $this->faker->lastname(),
            'datum'=> $this->faker->dateTimeBetween($startDate='-50 years', $endDate='-30 years',$timezone=null),
            'specijalizacija'=> $this->faker->randomElement(['Hirurg','Kardiolog','Stomatolog','Hospitalist','Dermatolog','Oftalmolog','Otolaringolog','Pedijatar','Psihijatar']),
        ];
    }
}
