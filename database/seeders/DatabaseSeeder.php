<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
<<<<<<< HEAD:database/seeders/DatabaseSeeder.php
        // \App\Models\User::factory(10)->create();
=======
        // $this->call(UsersTableSeeder::class);
        $this->call([
            UserFactory::class
        ]);
>>>>>>> 9fcb29988b3db4b24d558c9aadc21aa590f6ba2c:database/seeds/DatabaseSeeder.php
    }
}
