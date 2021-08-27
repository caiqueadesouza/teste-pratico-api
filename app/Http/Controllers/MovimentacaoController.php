<?php

namespace App\Http\Controllers;

use App\Http\Requests\MovimentacaoRequest;
use App\Models\Movimentacao;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{

    public function index()
    {
        $movimentacoes = Movimentacao::all();
        return response()->json($movimentacoes);
    }

    public function store(MovimentacaoRequest $request)
    {

        $movimento = new Movimentacao($request->all());
        $movimento->save();
        return response()->json($movimento);
    }

    public function show($id)
    {
        $movimento = Movimentacao::findOrFail($id);
        return response()->json($movimento);
    }

    public function update(MovimentacaoRequest $request, $id)
    {
        $movimento = Movimentacao::findOrFail($id);
        $movimento->update($request->all());
        return response()->json($movimento);
    }

    public function destroy($id)
    {
        $movimento = Movimentacao::destroy($id);
        return response()->json($movimento);
    }
}
