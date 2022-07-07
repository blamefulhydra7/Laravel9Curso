<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Database\Factories\EstudianteFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estudiante::factory()->count(10)->create();
    }
}
