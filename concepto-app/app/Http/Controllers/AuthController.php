<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //Login de un usuario común
    public function loginFormUser()
    {
        return view('auth/web/login');
    }

    public function loginProcessUser(Request $request)
    {
        $request->validate(User::CREATE_RULES, User::CREATE_MESSAGES);

        $credentials = $request->only(['username', 'password']);

        if (!auth()->attempt($credentials)) {
            return redirect()
                ->route('auth.web.login.form')
                ->withInput()
                ->with('status.message', 'Las credenciales ingresadas no coinciden con nuestros registros.');
        }

        return redirect()
            ->route('web.home')
            ->with('status.message', '¡Hola de nuevo, ' . auth()->user()->username . '!');
    }

    public function logoutProcessUser(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.web.login.form')
            ->with('status.message', 'Cerraste sesión correctamente. ¡Esperamos verte de nuevo pronto!');
    }

    // Funciones del registro de un usuario común
    public function createFormRegister()
    {

        return view('auth.web.create');
    }

    public function createProcessRegister(Request $request)
    {
        $request->validate(User::CREATE_RULES_REGISTER, User::CREATE_MESSAGES_REGISTER);

        $data = $request->only(['username', 'email', 'password']);

        User::create(
            $data
        );

        return redirect('/iniciar-sesion');
    }

    // Login del Usuario Administrador
    public function loginFormAdmin()
    {
        return view('auth/admin/login');
    }

    public function loginProcessAdmin(Request $request)
    {
        $request->validate(User::CREATE_RULES, User::CREATE_MESSAGES);

        $credentials = $request->only(['username', 'password']);

        if ($credentials['username'] != "Admin") {
            return redirect()
                ->route('auth.web.login.form')
                ->withInput()
                ->with('status.message', 'No sos el admin.');
        } else {
            if (!auth()->attempt($credentials)) {
                return redirect()
                    ->route('auth.admin.login.form')
                    ->withInput()
                    ->with('status.message', 'Las credenciales ingresadas no coinciden con nuestros registros.');
            } else {
                return redirect()
                    ->route('admin.home')
                    ->with('status.message', '¡Hola de nuevo, ' . auth()->user()->username . '!');
            }
        }
    }

    public function logoutProcessAdmin(Request $request)
    {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()
            ->route('auth.admin.login.form')
            ->with('status.message', 'Cerraste sesión correctamente. ¡Esperamos verte de nuevo pronto!');
    }

    //Funciones para la lista de usuarios autenticados para el usuario admin
    public function userList()
    {

        $users = User::with('service')->get();
        return view('admin.user.userList', [
            'users' => $users,
        ]);
    }

    public function viewDetailUser(int $id)
    {
        return view('admin.user.viewDetail', [
            'user' => User::find($id),
        ]);
    }
}
