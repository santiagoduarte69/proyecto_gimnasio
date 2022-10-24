<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Gerente;
use App\Models\Cliente;
use App\Models\Entrenador;
use Illuminate\Support\Facades\Hash;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = new User();
        $g->name = "Pedro";
        $g->id_Role_FK = 1;
        $g->email = "Pedro@gmail.com";
        $g->password = "12345";
        $g->save();

        $g1 = new User();
        $g1->name = "santiago";
        $g1->id_Role_FK = 2;
        $g1->email = "santiago@misena.edu.co";
        $g1->password = "12345";
        $g1->save();

        $g2 = new User();
        $g2->name = "Jorge";
        $g2->id_Role_FK = 3;
        $g2->email = "jorge@gmail.com";
        $g2->password = "12345";
        $g2->save();
    }
}
