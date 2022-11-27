<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ejercicio;

class EjercicioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ejercicio1 = new Ejercicio();
        $ejercicio1->nombre_Ejercicio = "Jalon al pecho";
        $ejercicio1->tiempo_Ejercicio = "60 segundos";
        $ejercicio1->series_Ejercicio = "4";
        $ejercicio1->musculos_Involucrados = "Espalda, Biceps";
        $ejercicio1->descripcion_Ejercicio = "Tira de la barra hacia la parte superior del pecho mientras aprietas los omóplatos. 
        Los codos deben moverse hacia abajo y no hacia atrás."; 
        $ejercicio1->estado_Ejercicio = true; 
        $ejercicio1->save();


        $ejercicio2 = new Ejercicio();
        $ejercicio2->nombre_Ejercicio = "Press plano";
        $ejercicio2->tiempo_Ejercicio = "60 segundos";
        $ejercicio2->series_Ejercicio = "4";
        $ejercicio2->musculos_Involucrados = "Espalda, Pecho, Deltoides";
        $ejercicio2->descripcion_Ejercicio = "Es un ejercicio de peso libre que trabaja la fuerza de empuje del tren superior en el plano sagital."; 
        $ejercicio2->estado_Ejercicio = true; 
        $ejercicio2->save();

        $ejercicio3 = new Ejercicio();
        $ejercicio3->nombre_Ejercicio = "Peso muerto";
        $ejercicio3->tiempo_Ejercicio = "60 segundos";
        $ejercicio3->series_Ejercicio = "4";
        $ejercicio3->musculos_Involucrados = "Involucra todos los musculos";
        $ejercicio3->descripcion_Ejercicio = "Es un ejercicio que consiste en realizar una triple extensión (cadera, rodillas, tobillos) con el objetivo 
        de desplazar verticalmente una carga o resistencia hasta llegar a una posición de extensión (de pie)"; 
        $ejercicio3->estado_Ejercicio = true; 
        $ejercicio3->save();
    }
}
