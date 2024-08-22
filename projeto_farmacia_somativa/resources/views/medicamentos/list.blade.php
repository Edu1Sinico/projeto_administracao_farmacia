@extends('layouts.app')

@section('content')
    <div class="home-title" style="border-bottom: 3px solid black; padding: 15px;">
        <h2>Lista de Medicamentos</h2>
    </div>
    <br>
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br>
    @endif

    <div class="div-form" style="display: flex; align-items: center; justify-content: space-between; width: 100%">
        <form method="GET" action="{{ route('list') }}"
            style="display: flex; align-items: center; justify-content: space-evenly; width: 50%">
            <input type="search" name="search" class="form-control me-2" placeholder="Pesquisar medidcamento..."
                value="{{ request('search') }}">
            <button type="submit" class="btn btn-primary">Pesquisar</button>
        </form>

        @auth
            @if (Auth::user()->isFuncionario())
                <a class="btn btn-success mb-2" href="{{ route('medicamentos.index') }}"> Cadastrar Medicamentos</a>
            @endif
        @endauth

    </div>
    <br>
    <div class="row">
        @foreach ($medicamentos as $medicamento)
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-text">{{ $medicamento->descricao }}</h5>
                        <p class="card-text">Quantidade: {{ $medicamento->quantidade }}</p>
                        <p class="card-text">Preço: R$ {{ $medicamento->preco }}</p>
                        <a href="{{ route('medicamentos.show', $medicamento->id) }}" class="btn btn-primary">Ver
                            medicamento</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
