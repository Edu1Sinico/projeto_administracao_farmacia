@extends('layouts.app')

@section('content')
    {{-- formulario --}}
    <div class="container">
        <h1>Registrar-se</h1>
        <form method="POST" action="{{ route('usuarios.registro') }}">
            @csrf

            <div class="form-group">
                <label for="name">Nome</label>
                <input type="text" name="name" placeholder="Insira o seu nome" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" placeholder="Insira o seu CPF" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Insira o seu Email" class="form-control" required>
            </div>
            <br>
            <div class="form-group">
                <label for="password">Senha</label>
                <input type="password" min="8" name="password" placeholder="Crie uma senha" class="form-control"
                    required>
            </div>
            <br>
            <div class="form-group">
                <label for="password_confirmation">Confirme a Senha</label>
                <input type="password" min="8" name="password_confirmation" placeholder="Confirmar sua senha"
                    class="form-control" required>
            </div>
            <br>
            <div class="form-check-container" style="display: flex; justify-content: space-evenly; width: 100%;">
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='cliente' name="tipo" id="typeUserRadio1"
                        checked>
                    <label class="form-check-label" for="typeUserRadio1">
                        Cliente
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" value='funcionario' name="tipo" id="typeUserRadio2">
                    <label class="form-check-label" for="typeUserRadio2">
                        Funcionário
                    </label>
                </div>
            </div>
            <br>
            <div align="center" class="form-group">
                <button type="submit" class="btn btn-primary">Registrar-se</button>
            </div>

        </form>
    </div>
@endsection
