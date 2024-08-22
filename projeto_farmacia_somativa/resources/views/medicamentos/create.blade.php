@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="create-title" style="border-bottom: 3px solid black; padding: 15px;">
            <h2 class="my-4">Cadastrar Medicamentos</h2>
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

        <form action="{{ route('medicamentos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="descricao">Descrição:</label>
                <input type="text" name="descricao" class="form-control">
            </div>
            <br>
    
            <div class="form-group">
                <label for="quantidade">Quantidade:</label>
                <input type="number" min="0" name="quantidade" class="form-control">
            </div>
            <br>
    
            <div class="form-group">
                <label for="preco">Preço:</label>
                <input type="text" name="preco" class="form-control">
            </div>
            <br>
            
            <div align="center" class="form-group">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </form>
    </div>
@endsection
