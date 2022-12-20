<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Disease;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Disease>
 */
class DiseaseFactory extends Factory
{
   
    protected $model= Disease::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type'=> $this->faker->randomElement(['Dijabetes','Dermatitis','Rak','Grip','Bronhitis','Išijas','Akne','Artroza','Atrofija','Astma','Gastritis','Infarkt','Karijes','Kolitis','Osteoporoza','Paraliza','Reumatizam','Tuberkuloza','Herpes','Šizofrenija']),
            'symptoms'=> $this->faker->randomElement(['temperatura','glavobolja','mučnine','umor','bol u stomaku','ubrzano lupanje srca']),
            'medicine'=> $this->faker->numberBetween(1,9),
        ];
    }
}
