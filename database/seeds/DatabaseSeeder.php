<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(LinksTableSeeder::class);
        $this->call(SpectaclesTableSeeder::class);
        $this->call(WorkerTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(VacanciesTableSeeder::class);
        $this->call(AffichesTableSeeder::class);
    }
}
