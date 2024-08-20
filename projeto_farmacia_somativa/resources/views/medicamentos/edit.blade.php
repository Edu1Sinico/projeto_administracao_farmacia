@extends('layout.app')

@section('content')
<div class="container">
    <div class="edit-title" style="border-bottom: 3px solid black; padding: 15px;">
        <h2 class="my-4">Editar Medicamento</h2>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Houve alguns problemas com sua entrada.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('medicamentos.update', $medicamento->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <label for="descricao">Descrição:</label>
            <input type="text" name="descricao" class="form-control" value="{{$medicamento->descricao}}">
        </div>
        

        <div class="form-group">
            <label for="quantidade">Quantidade:</label>
            <input type="number" min="0" name="quantidade" class="form-control" value="{{$medicamento->quantidade}}">
        </div>


        <div class="form-group">
            <label for="preco">Preço:</label>
            <input type="text" name="preco" class="form-control" value="{{$medicamento->preco}}">
        </div>


        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>
@endsection
