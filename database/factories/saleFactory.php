<?php

namespace Database\Factories;

use App\Models\sale;
use App\Models\client;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class saleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
        protected $model=sale::class;
    public function definition()
    {
        return [
            
            'clients_id'=>client::all()->random()->id,
            'date'=>fake()->numberBetween($int1=1,$int2=100000),
        ];
    }
}
