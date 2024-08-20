<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\venda;
use App\Models\medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VendaController extends Controller
{

    public function add(Request $request, Medicamento $medicamento){

        $quantidade = $request->input('quantidade');
        $total = $medicamento->preco * $quantidade;

        // Registrar a venda
        $venda = Venda::create([
            'id_cliente' => Auth::id(),
            'id_medicamento' => $medicamento->id,
            'total' => $total,
            'quantidade' => $quantidade,
        ]);
        
        
        // $venda = Venda::firstOrCreate(['id_cliente' => Auth::id(), 'id_medicamento' => $medicamento->id, 'total' => $medicamento->total, 'quantidade' => $medicamento->quantidade]);

        return redirect()->route('medicamentos.show', $venda->id)->with('success','Compra realizada com sucesso!');
    }

}
