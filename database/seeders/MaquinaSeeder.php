<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Maquina;

class MaquinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $maquina = new Maquina();
        $maquina->nombre_Maquina = "Cinta de Correr";
        $maquina->proveedor = "Forma";
        $maquina->Cantidad = 2;
        $maquina->lugar_Maquina = "Segundo piso";
        $maquina->estado_Maquina = 1;
        $maquina->identificacion_Gerente_Fk = 1;
        $maquina->save();

        $maquina2 = new Maquina();
        $maquina2->nombre_Maquina = "Remo";
        $maquina2->proveedor = "Forma";
        $maquina2->Cantidad = 4;
        $maquina2->lugar_Maquina = "Primer piso";
        $maquina2->estado_Maquina = 1;
        $maquina2->identificacion_Gerente_Fk = 1;
        $maquina2->save();
    }
}
