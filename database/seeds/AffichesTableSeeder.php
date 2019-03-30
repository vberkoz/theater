<?php

use Illuminate\Database\Seeder;

class AffichesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Affiche::class, 20)->create();
    }
}
