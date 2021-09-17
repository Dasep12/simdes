<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;
use App\Models\M_gallery;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //\App\Models\User::factory(10)->create();
        //\App\Models\M_gallery::factory(10)->create();

        //\App\Models\Pendidikan::factory(20)->create();
        \App\Models\Count::factory(5)->create();

        // M_gallery::create([
        //     'M_produk_id'  => 11,
        //     'image'        => 'dasep.png'
        // ]);

        // M_gallery::create([
        //     'M_produk_id'  => 11,
        //     'image'        => 'cover.png'
        // ]);
    }
}
