@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="index-title" style="border-bottom: 3px solid black; padding: 15px;">
            <h2 class="my-4">Relatório de Vendas Realizadas</h2>
        </div>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            <br>
        @endif

        <a class="btn btn-success mb-2" href="{{ route('medicamentos.create') }}"> Criar Nova Vaga</a>

        <table class="table table-bordered">
            <tr>
                <th>Nº</th>
                <th>Cliente</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Preço Total</th>
            </tr>
            @foreach ($vendas as $venda)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $venda->nome_cliente }}</td>
                    <td>{{ $venda->desc_medicamento }}</td>
                    <td>{{ intval($venda->quantidade) }}</td>
                    <td>{{ $venda->total }}</td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
