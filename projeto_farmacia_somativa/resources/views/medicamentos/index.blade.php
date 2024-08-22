@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="index-title" style="border-bottom: 3px solid black; padding: 15px;">
            <h2 class="my-4">Medicamentos</h2>
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
                <th>Descrição</th>
                <th>Quantidade</th>
                <th>Preço</th>
                <th width="280px">Ação</th>
            </tr>
            @foreach ($medicamentos as $medicamento)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $medicamento->descricao }}</td>
                    <td>{{ $medicamento->quantidade }}</td>
                    <td>{{ $medicamento->preco }}</td>
                    <td>
                        <form action="{{ route('medicamentos.destroy', $medicamento->id) }}" method="POST">
                            <a class="btn btn-primary" href="{{ route('medicamentos.edit', $medicamento->id) }}">Editar</a>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Deletar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
