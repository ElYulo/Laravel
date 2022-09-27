<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function obtener()
    {
        //Esto es el equivalente al select * from db
        $usuarios = Usuario::all();
        return $usuarios;
    }

    public function actualizar($id)
    {
        return 'Usuario actualizado con el id ' . $id;
    }
    public function eliminar($id)
    {
        return 'Se elimino el usuario con el id ' . $id;
    }
    public function crear()
    {
        return 'Se añadio un usuario';
    }
}
