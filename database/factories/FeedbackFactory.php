<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class FeedbackFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_sender' => $this->faker->name(),
            'email_sender' => $this->faker->email(),
            'phone_sender' => $this->faker->phoneNumber(),
            'pesan' => $this->faker->sentences(7, true)
        ];
    }
}
