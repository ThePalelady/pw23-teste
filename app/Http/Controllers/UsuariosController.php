<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function index() {
        $users = Usuario::all();
        return view('usuarios.index', [
            'users' => $users,
        ]);
    }

    public function add(Request $request) {
        if ($request->isMethod('POST')) {
            $usr = $request->validate([
                'name' => 'string|required',
                'email' => 'email|required',
                'password' => 'string|required',
            ]);
            Usuario::create($usr);
            return redirect()->route('usuarios');
        }

        return view('usuarios.add');
    }
}
