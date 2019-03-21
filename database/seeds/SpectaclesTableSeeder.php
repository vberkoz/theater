<?php

use Illuminate\Database\Seeder;

class SpectaclesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Spectacle::class, 10)->create();
    }
}
