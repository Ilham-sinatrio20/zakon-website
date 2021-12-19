<?php

namespace Database\Factories;

use App\Models\Lawyer;
use Illuminate\Database\Eloquent\Factories\Factory;

class LawyerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Lawyer::class;

    public function definition() {
        $edu = 'S2 Hukum Universitas ';
        return [
            'nama_lawyer' => $this->faker->name(),
            'phone' => $this->faker->phoneNumber(),
            'place_birth' => $this->faker->city(),
            'date_birth' => $this->faker->dateTimeBetween('-50 years', '-35 years'),
            'address' => $this->faker->address(),
            'picture' => $this->faker->image('public/images', 400, 300),
            'email' => $this->faker->email(),
            'negara' => $this->faker->country(),
            'last_edu' => 'S2 Hukum Universitas '.$this->faker->company(),
            'website' => $this->faker->url(),
            'jenis_hukum' => $this->faker->word(),
            'pengalaman' => $this->faker->sentences(2, true),
        ];
    }
}
