<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use Illuminate\Http\Request;

class ListMedicamentosController extends Controller
{
    public function index(Request $request){
        $search = $request->input('search');
        $medicamentos = Medicamento::when($search,function ($query, $search) {
            return $query->where('descricao','like', "%{$search}%")
                    ->orWhere('preco','like', "%{$search}%");
        })->get();

        return view('medicamentos.list', compact('medicamentos'));
    }
}
