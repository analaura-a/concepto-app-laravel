<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function loginForm()
    {
        return view('auth/login');
    }

    public function loginProcess(Request $request)
    {
        $request->validate(User::CREATE_RULES, User::CREATE_MESSAGES);

        $credentials = $request->only(['username', 'password']);

        if (!auth()->attempt($credentials)) {
            return redirect()
                ->route('auth.login.form')
                ->withInput()
                ->with('status.message', 'Las credenciales ingresadas no coinciden con nuestros registros.');
        }

        return redirect()
            ->route('admin.home')
            ->with('status.message', '¡Hola de nuevo, ' . auth()->user()->username . '!');
    }

    public function logoutProcess(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.login.form')
            ->with('status.message', 'Cerraste sesión correctamente. ¡Esperamos verte de nuevo pronto!');
    }
}
