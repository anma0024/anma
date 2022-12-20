<?php

namespace Database\Factories;

use App\Models\client;
use App\Models\sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class clientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=client::class;
    public function definition()
    {
        return [
            'client'=>fake()->sentence(),
        ];
    }
}
