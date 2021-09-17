<?php

namespace Database\Factories;

use App\Models\M_produk;
use Illuminate\Database\Eloquent\Factories\Factory;

class MProdukFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = M_produk::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'namaProduk'        => $this->faker->name(),
            'idProduk'          => $this->faker->name(),
            'deskripsi'         => $this->faker->text()
        ];
    }
}
