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
        $law = Lawyer::select('jenis_hukum')->inRandomOrder()->limit(1)->get();
        return [
            'lawyer_id' => rand(1, Lawyer::count()),
            'jenis_hukum' => (string) $law,
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
