<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $customBranch = ['Maypajo Branch', 'Navotas Branch', 'Tayuman Branch', 'Fishermall Branch', 'Legarda Branch'];

        // if ($customCourse[] = 'TDC') {
        //     $customVehicle = ['---'];
        //     $customTransmission = ['---'];
        // } else if ($customCourse[] = 'PDC') {
        //     $customVehicle = ['Toyota Altis MT', 'Toyota Vios MT'];
        //     $customTransmission = ['Manual', 'Automatic'];
        // }

        // $customCourse = ['TDC'];
        // $customVehicle = ['---'];
        // $customTransmission = ['---'];
        
        $customCourse = ['PDC'];
        $customVehicle = ['Toyota Altis MT', 'Toyota Vios MT'];
        $customTransmission = ['Manual', 'Automatic'];
        
        return [
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'branch' => $this->faker->randomElement($customBranch),
            'date' => $this->faker->dateTimeBetween('2024-03-00', 'now'),
            'course' =>$this->faker->randomElement($customCourse),
            'vehicle' => $this->faker->randomElement($customVehicle),
            'transmission' => $this->faker->randomElement($customTransmission)
        ];
    }
}
