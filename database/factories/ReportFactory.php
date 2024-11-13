<?php

namespace Database\Factories;
use App\Models\Report;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Report>
 */
class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Report::class;

    public function definition()
    {
        return [
            'gcash' => $this->faker->randomFloat(2, 0, 1000),
            'cash' => $this->faker->randomFloat(2, 0, 1000),
            'print_sales' => $this->faker->randomFloat(2, 0, 1000),
            'merch_sales' => $this->faker->randomFloat(2, 0, 1000),
            'custom_sales' => $this->faker->randomFloat(2, 0, 1000),
            'total_sales' => $this->faker->randomFloat(2, 0, 3000),
            'print_expenses' => $this->faker->randomFloat(2, 0, 500),
            'merch_expenses' => $this->faker->randomFloat(2, 0, 500),
            'custom_expenses' => $this->faker->randomFloat(2, 0, 500),
            'total_expenses' => $this->faker->randomFloat(2, 0, 1500),
        ];
    }
}
