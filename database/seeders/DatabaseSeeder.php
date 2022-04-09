<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Producto;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();


        // ----------------- Administrador  ----------------- 
        $usuario1 = new User();

        $usuario1->name = "Admin";
        $usuario1->email = "admin1@prueba.com";
        $usuario1->password = bcrypt('12345');
        $usuario1->tipo_usuario = 1;

        $usuario1->save();

        // ----------------- Cliente 1  ----------------- 
        $usuario2 = new User();

        $usuario2->name = "Cliente 1";
        $usuario2->email = "cliente1@prueba.com";
        $usuario2->password = bcrypt('54321');
        $usuario2->tipo_usuario = 0;

        $usuario2->save();


        // ----------------- Producto 1  ----------------- 
        $producto1 = new Producto();

        $producto1->nombre = "Producto 1";
        $producto1->precio = 123.45;
        $producto1->impuesto = 5;

        $producto1->save();

        // ----------------- Producto 2  ----------------- 
        $producto2 = new Producto();

        $producto2->nombre = "Producto 2";
        $producto2->precio = 45.65;
        $producto2->impuesto = 15;

        $producto2->save();

        // ----------------- Producto 3  ----------------- 
        $producto3 = new Producto();

        $producto3->nombre = "Producto 3";
        $producto3->precio = 39.73;
        $producto3->impuesto = 12;

        $producto3->save();

        // ----------------- Producto 4  ----------------- 
        $producto4 = new Producto();

        $producto4->nombre = "Producto 4";
        $producto4->precio = 250;
        $producto4->impuesto = 8;

        $producto4->save();

        // ----------------- Producto 5  ----------------- 
        $producto5 = new Producto();

        $producto5->nombre = "Producto 5";
        $producto5->precio = 59.35;
        $producto5->impuesto = 10;

        $producto5->save();
    }
}
