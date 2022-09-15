<?php

namespace Database\Seeders;

use App\Models\etudiant;
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
        $this->call(ClassesTableSeeder::class);
        etudiant::factory(30)->create();
    }
}