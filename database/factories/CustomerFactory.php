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
        // $customBranch = ['Maypajo Branch', 'Navotas Branch', 'Tayuman Branch', 'Fishermall Branch', 'Legarda Branch'];

        $phCode = +639;
        $customCourse = ['TDC'];
        $paidAttachment = ['---'];
        $customTransmission = ['---'];
        
        // $customCourse = ['PDC'];
        // $customVehicle = ['Toyota Altis MT', 'Toyota Vios MT'];
        // $customTransmission = ['Manual', 'Automatic'];
        
        return [
            'pic' => $this->faker->imageUrl(640, 480, 'people'),
            'name' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact' => $this->faker->unique()->e164PhoneNumber($phCode),
            'date' => $this->faker->dateTimeBetween('2024-03-00', 'now'),
            'course' =>$this->faker->randomElement($customCourse),
            'paid_attachment' => $this->faker->randomElement($paidAttachment),
            'transmission' => $this->faker->randomElement($customTransmission)
        ];
    }
}
