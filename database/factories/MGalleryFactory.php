<?php

namespace Database\Factories;

use App\Models\M_gallery;
use Illuminate\Database\Eloquent\Factories\Factory;

class MGalleryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = M_gallery::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'id_produk'     => mt_rand(1, 3),
            'image'         => $this->faker->name()
        ];
    }
}
