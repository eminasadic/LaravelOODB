<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Medicine;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
{
    protected $model= Medicine::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'medicineName'=> $this->faker->randomElement(['Zoltex','Lekadol','Nolpaza','Prospan','Pantoprazol','Lanzul','Rosix','Analgin','Paracetamol','Analgin']),
            'medicineType'=> $this->faker->randomElement(['krema','tableta','kapi','sprej','injekcija','kapsula']),
            'use'=> $this->faker->randomElement(['temperatura','glavobolja','mučnine','umor','bol u stomaku','ubrzano lupanje srca']),
        ];
    }
}
