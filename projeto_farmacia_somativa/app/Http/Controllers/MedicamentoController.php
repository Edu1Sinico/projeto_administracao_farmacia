<?php

namespace App\Http\Controllers;

use App\Models\medicamento;
use Illuminate\Http\Request;

class MedicamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $medicamentos = Medicamento::all();
        return view('medicamentos.index',compact('medicamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('medicamentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->validate([
            'descricao'=> 'required|string|max:100',
            'preco'=>'required|numeric',
            'quantidade'=>'required|numeric'
        ]);
        Medicamento::create($dados);


        return redirect()->route('medicamentos.index')
            ->with('success', 'Medicamento adicionado com sucesso.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Medicamento $medicamento){
        return view('medicamentos.show', compact('medicamento'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medicamento $medicamento)
    {
        return view('medicamentos.edit',compact('medicamento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medicamento $medicamento)
    {
        $dados = $request->validate([
            'descricao'=> 'required|string|max:100',
            'preco'=>'required|numeric',
            'quantidade'=>'required|numeric'
        ]);
        $medicamento->update($dados);

        return redirect()->route('medicamentos.index')->with('success', 'Medicamento atualizado com sucesso.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medicamento $medicamento)
    {
        $medicamento->delete($medicamento);
        return redirect()->route('medicamentos.index')->with('success', 'Medicamento Deletada com sucesso.');
    }
}
