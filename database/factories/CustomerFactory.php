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
        $checkin = $this->faker->dateTimeBetween('now', '+1 month');
        $checkout = $this->faker->dateTimeBetween($checkin, '+2 months');

        return [
            'booking_id'    => $this->faker->unique()->numerify('BK-#####'),
            'firstname'     => $this->faker->firstName(),
            'lastname'      => $this->faker->lastName(),
            'room_type'     => $this->faker->randomElement(['Standard', 'Deluxe', 'Grand Deluxe']),
            'room_number'   => $this->faker->numberBetween(1, 100),
            'checkin_date'  => $checkin,
            'checkout_date' => $checkout,
        ];
    }
}
