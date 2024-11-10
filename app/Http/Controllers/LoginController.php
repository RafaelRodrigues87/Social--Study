<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        // Valida os dados do formulário
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Tenta realizar o login com as credenciais fornecidas
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Login bem-sucedido
            return redirect('/')->with('message', 'Login realizado com sucesso!');
        } else {
            // Login falhou
            return back()->withErrors(['email' => 'Credenciais inválidas'])->withInput();
        }
    }
}
