<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Event>
 */
class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = ['TDC', 'PDC'];
        $customBranch = ['Maypajo Branch', 'Navotas Branch', 'Tayuman Branch', 'Fishermall Branch', 'Legarda Branch'];
        $description = ['Reserved       '. $customBranch. '', 'Not Reserved       '. $customBranch. ''];
        $status = ['Reserved', 'Not Reserved'];

        return [
            
            'title' => $this->faker->randomElement($title),
            'description' => $this->faker->randomElement($description),
            'status' => $this->faker->randomElement($status),
            'date' => $this->faker->dateTimeBetween('2024-03-00', '2024-05-00'),
            'branch' => $this->faker->randomElement($customBranch)
            
        ];
    }
}
