<?php

namespace Database\Factories;

use App\Models\Pendidikan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PendidikanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pendidikan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'author'        => 'Administrator',
            'kelompok'      => $this->faker->name(),
            'laki_laki'     => mt_rand(1, 100),
            'perempuan'     => mt_rand(1, 100),
            'jumlah'        => mt_rand(1, 500)
        ];
    }
}
