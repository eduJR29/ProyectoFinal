<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Medicamento;
use Illuminate\Database\Seeder;

class MedicamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Medicamento::create(['nombre_medicamento' => 'Abelladona', 'presentacion' => 'Gotas', 'cantidad' => '5']);
        Medicamento::create(['nombre_medicamento' => 'Arnica', 'presentacion' => 'Gotas', 'cantidad' => '15']);
        Medicamento::create(['nombre_medicamento' => 'Aloe Vera', 'presentacion' => 'Granulos', 'cantidad' => '3']);
        
        //Medicamento::factory(1)->create();
    }
}
