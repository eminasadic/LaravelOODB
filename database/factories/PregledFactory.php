<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Pregled;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pregled>
 */
class PregledFactory extends Factory
{

    protected $model= Pregled::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'doktor1'=> $this->faker->numberBetween(1,9),
            'pacijent1'=> $this->faker->numberBetween(1,20),
            'bolest1'=> $this->faker->numberBetween(1,20),
            'lijek1'=> $this->faker->numberBetween(1,9),
        ];
    }
}
