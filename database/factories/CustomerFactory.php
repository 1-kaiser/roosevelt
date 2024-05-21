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

        $phCode = +639;
        // $customCourse = ['TDC'];
        // $paidAttachment = ['---'];
        // $customTransmission = ['---'];
        
        $customCourse = ['PDC'];
        $paidAttachment = ['---'];
        $valid_id = ['---'];
        $customTransmission = ['Manual', 'Automatic'];
        
        return [
            'pic' => $this->faker->imageUrl(640, 480, 'people'),
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact' => $this->faker->unique()->e164PhoneNumber($phCode),
            'age' => $this->faker->numberBetween($min = 18, $max = 60),
            'birthday' => $this->faker->dateTimeBetween('-65 years', '-18 years')->format('Y-m-d'),
            'date' => $this->faker->dateTimeBetween('2024-03-00', 'now'),
            'course' => $this->faker->randomElement($customCourse),
            'valid_id' => $this->faker->randomElement($valid_id),
            'paid_attachment' => $this->faker->randomElement($paidAttachment),
            'transmission' => $this->faker->randomElement($customTransmission)
        ];
    }
}
