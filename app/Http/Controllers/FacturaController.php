<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;
use App\Models\Compra;
use DB;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $facturas = Factura::all();
       //$facturas = Factura::all()->groupBy('user_id');
       /*
        El group by no funciona debido a la relación 'uno a muchos' que tiene
        el modelo 'Factura' con los usuarios y los productos.
        Una forma de solucionarlo sería recorrer los atributos por medio de un foreach, pero
        eso implica un cambio al momento de pasar la variable 'facturas' por el compact.
        Debido al tiempo que implica entregar el examen, se dejó la vista de 'facturas' con
        los nombres de los clientes repetidos.
       */

        return view("admin.facturas.index", compact("facturas"));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Factura::truncate();
        $data = Compra::all();
        
        foreach ($data as $row) {
            Factura::insert([
                'subtotal' => $row['subtotal'],
                'impuesto' => $row['impuesto'],   
                'total' => $row['total'],
                'user_id' =>  $row['user_id'],
                'producto_id' => $row['producto_id'],
                'created_at' => $row['created_at']
            ]);
        }
        
        return redirect()->route('admin.panel');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $facturas = Factura::where('user_id', $id)->orderBy('created_at')->get();
        return view("admin.facturas.show", compact("facturas"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function edit(Factura $factura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Factura $factura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Factura  $factura
     * @return \Illuminate\Http\Response
     */
    public function destroy(Factura $factura)
    {
        //
    }
}
