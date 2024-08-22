<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\venda;
use App\Models\medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendaController extends Controller
{   

    public function index()
    {
        $vendas = Venda::all();
        return view('vendas.index',compact('vendas'));
    }

    public function add(Request $request, Medicamento $medicamento)
    {
        // Captura a quantidade e total enviados pelo formulário
        $quantidade = $request->input('quantidade');
        $total = $request->input('total');

        // Cria ou encontra a venda com os valores capturados
        $venda = Venda::create([
            'nome_cliente' => Auth::user()->name,
            'desc_medicamento' => $medicamento->descricao,
            'quantidade' => $quantidade,
            'total' => $total
        ]);

        // Atualiza a quantidade do medicamento no estoque
        $medicamentoController = new MedicamentoController();
        $medicamentoController->atualizarQuantidade($medicamento, $quantidade);

        // Redireciona com mensagem de sucesso
        return redirect()->route('medicamentos.show', $medicamento->id)->with('success', 'Compra realizada com sucesso!');
    }
}
