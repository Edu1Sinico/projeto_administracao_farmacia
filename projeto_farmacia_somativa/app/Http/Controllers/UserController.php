<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Rotas
    // Exibir o formulário de login
    public function showLoginForm()
    {
        return view('usuarios.login');
    }


    // Processar o login do usuário
    public function login(Request $request)
    {
        // Valida as credenciais de email e senha
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        // Tenta autenticar o usuário com as credenciais fornecidas usando o guard 'web'.
        // O método attempt retorna 'true' se as credenciais estiverem corretas.
        if (Auth::guard('web')->attempt($credentials)) {

            // Se a autenticação for bem-sucedida, regenera a sessão do usuário.
            // Isso ajuda a prevenir ataques de fixação de sessão, garantindo que uma nova sessão seja criada.
            $request->session()->regenerate();

            // Redireciona o usuário para a URL que ele tentou acessar antes de ser redirecionado para o login.
            // Se não houver uma URL específica, o usuário é redirecionado para a página '/dashboard'.
            return redirect()->intended('/');
        }

        // Caso ocorra algum erro, retorna essa mensagem.
        return back()->withErrors([
            'email' => 'As credenciais não correspondem aos nossos registros.',
        ])->onlyInput('email');
    }


    // Exibir o formulário de registro
    public function showRegistroForm()
    {
        return view('usuarios.registro');
    }


    // Processar o registro de um novo usuário
    public function registro(Request $request)
    {
        // Valida as informações de registros de usuários
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'cpf' => 'required|string|max:14|unique:users',
            'tipo' => 'required|string',
        ]);


        $usuario = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'cpf' => $request->cpf,
            'tipo' => $request->tipo
        ]);

        // Após a realização do registro, ele automáticamente iniciará o login.
        Auth::guard('web')->login($usuario);

        // Ele irá redirecionar para a página de dashboard do usuários.
        return redirect('/');
    }


    // Realizar o logout do usuário
    public function logout(Request $request)
    {
        Auth::guard('web')->logout(); // Logout do guard 'usuario'
        $request->session()->regenerateToken(); // Regenera o token da sessão

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
