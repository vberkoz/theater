<?php

use Illuminate\Database\Seeder;

class WorkerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Worker::class, 20)->create();
    }
}
