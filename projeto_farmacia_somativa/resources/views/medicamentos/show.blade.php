@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="show-title" style="border-bottom: 3px solid black; padding: 15px;">
            <h2>Visualização do Medicamento<h2>
        </div>
        <br>

        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            <br>
        @endif


        <div class="row" style="width: 100%; display: flex; align-items: center; justify-content: center;">
            <div class="col-md-6" style="display: flex; flex-direction: column; justify-content:center; width: 50%">
                <h2 align="center" style="padding: 10px; border-bottom: 1px solid black;">{{ $medicamento->descricao }}</h2>
                <br>

                <div class="content-info" style="width: 100%; display: flex; flex-direction: column; align-items:center;">
                    <div class="col-md-6" style="width: 90%; display: flex; flex-direction: column; align-items:flex-start">
                        <label>Quantidade Disponível: <span>{{ intval($medicamento->quantidade) }}</span></label><br>
                        <label>Preço do Produto: R$  <span>{{ $medicamento->preco }}</span></label>
                    </div>
                    <br>
                    <form method="POST" action="{{ route('venda.add', $medicamento->id) }}" style="width: 85%;">
                        @csrf
                        <div class="form-group">
                            <label for="quantidade">Quantidade para Comprar:</label><br>
                            <input type="number" name="quantidade" min="1" max="{{ $medicamento->quantidade }}"
                                id="qtde_input_id" value="1" class="form-control"><br>
                            <label for="total">Preço Total para Pagar:</label><br>
                            <input type="number" name="total" id="preco_total" value="{{ $medicamento->preco }}" class="form-control" readonly>
                        </div>
                        <br>
                        <div class="form-buttom" style="display: flex; width: 100%; justify-content: center;">
                            <button type="submit" class="btn btn-primary">Comprar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('qtde_input_id').addEventListener('input', function() {
            // Preço do medicamento
            const preco = {{ $medicamento->preco }};
            // Quantidade selecionada pelo usuário
            const quantidade = this.value;
            // Cálculo do preço total
            const precoTotal = preco * quantidade;
            // Atualizar o valor exibido
            document.getElementById('preco_total').value = precoTotal.toFixed(2);
        });
    </script>
@endsection
