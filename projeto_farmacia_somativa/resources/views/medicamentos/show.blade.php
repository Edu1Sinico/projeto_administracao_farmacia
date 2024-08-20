@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="show-title" style="border-bottom: 3px solid black; padding: 15px;">
            <h2>Visualização do Medicamento<h2>
        </div>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <div class="row">
            <div class="col-md-6">
                <h2>{{ $medicamento->descricao }}</h2>
                <h2>{{ $medicamento->quantidade }}</h2>
                <p>Preço: R$ {{ $medicamento->preco }}</p>

                <div class="col-md-6">
                    <label for="quantidade">Quantidade:</label>
                    <input type="number" name="quantidade" min="1" id="qtde_input_id">
                    <label>Preço Total: R$ <span>{{ $medicamento->preco }}</span></label>
                </div>

                <form method="POST" action="{{ route('venda.add', $medicamento->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="quantidade">Quantidade:</label>
                        <input type="number" name="quantidade" min="1" max="{{ $medicamento->quantidade }}"
                            id="qtde_input_id" value="1" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Comprar</button>
                </form>
            </div>
        </div>
    </div>
@endsection
