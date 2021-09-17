<?php

namespace Database\Factories;

use App\Models\Count;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Count::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'ip'             =>  "192.168.46.100",
            'm_berita_id'    =>  mt_rand(1, 4),
            'tanggal'        => date('Y-m-d'),
            'view'           => 2
        ];
    }
}
