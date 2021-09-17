<?php

namespace Database\Factories;

use App\Models\Modelpemerintah;
use Illuminate\Database\Eloquent\Factories\Factory;

class PemerintahFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = M_pemerintah::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'judul'          => 'Pemerintah Desa Sukasari',
            'pemerintah'     => $this->faker->paragraph,
            'cover'          => 'cover.jpg',
            'author'         => 'Administrator'
        ];
    }
}
