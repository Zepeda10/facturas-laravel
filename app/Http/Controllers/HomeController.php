<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\Compra;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $productos = Producto::all();
        return view('home', compact('productos'));
    }

    public function vender(Request $request){
        $compra = new Compra();
        $producto = Producto::findOrFail($request->producto_id);
        $neto = $producto->precio - ($producto->precio * ($producto->impuesto / 100)); 

        $compra->user_id = $request->user_id;
        $compra->producto_id = $request->producto_id;
        $compra->impuesto = $producto->impuesto;
        $compra->subtotal = $producto->precio;
        $compra->total = $neto;

        $compra->save();

        return redirect()->route('home');
    }
}
