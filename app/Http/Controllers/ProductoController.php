<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function obtener()
    {
        $producto = Producto::all();
        return response($producto, 200);
    }
}
