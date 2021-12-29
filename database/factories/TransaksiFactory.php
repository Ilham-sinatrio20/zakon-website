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
            'jenis_hukum' => $this->faker->word(),
            'tgl_meet' => $this->faker->date(),
            'waktu_meet' => $this->faker->time(),
            'jenis_meet' => $this->faker->word(),
            'deskripsi' => $this->faker->sentences(8, true),
            'keterangan' => $this->faker->sentences(4, true),
            'status' => $this->faker->word()
        ];
    }
}
