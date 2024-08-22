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

        $venda = Venda::firstOrCreate(['id_usuario' => Auth::id(), 'id_medicamento' => $medicamento->id, 'total' => $medicamento->total, 'quantidade' => $medicamento->quantidade]);

        return redirect()->route('medicamentos.index', $venda->id)->with('success','Compra realizada com sucesso!');
    }

}
