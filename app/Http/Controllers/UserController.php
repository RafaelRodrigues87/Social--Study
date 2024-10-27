<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|min:8',
        ]);

        // Criando um novo usuário
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->email_verified_at = $request->email_verified_at;
        $user->password = $request->password; // Criptografa a senha
        $user->remember_token = $request->remember_token;

        $user->save(); // Salva o usuário no banco de dados

        return redirect('/'); // Redireciona para a página inicial ou qualquer outra página desejada
    }
}
