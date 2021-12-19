<?php

namespace Database\Factories;
use App\Models\Transaksi;
use App\Models\Lawyer;
use Illuminate\Database\Eloquent\Factories\Factory;


class TransaksiFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'lawyer_id' => rand(1, Lawyer::count()),
            'nama_klien' => $this->faker->name,
            'email_klien' => $this->faker->email,
            'phone' => $this->faker->phoneNumber,
            'tgl_meet' => $this->faker->dateTimeBetween('-2 years', 'now'),
            'jenis_meet' => $this->faker->word,
            'status' => $this->faker->word,
            'keterangan' => $this->faker->sentences(4, true)
        ];
    }
}
