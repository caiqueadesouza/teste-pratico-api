<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use Illuminate\Support\Facades\DB;

class RelatorioController extends Controller
{

    public function index()
    {
        $movimentacoes = movimentacao::with('container')
            ->join('containers', 'containers.id', '=', 'movimentacaos.container_id')

            //DB::raw consulta bruta, por segurança para que seja efetuado a query corretamente.
            ->select('containers.cliente', 'movimentacaos.*', DB::raw('count(*) as quantidade'))
            ->groupBy('containers.cliente', 'movimentacaos.tipo_movimentacao')
            ->get();

        return response()->json($movimentacoes);
    }

    public function exportacao()
    {

        $exportacao = Movimentacao::join('containers', 'containers.id', '=', 'movimentacaos.container_id')
            ->where('containers.categoria', 'like', '%Exportacão%')
            ->count();

        return response()->json($exportacao);
    }

    public function importacao()
    {

        $importacao = Movimentacao::join('containers', 'containers.id', '=', 'movimentacaos.container_id')
            ->where('containers.categoria', 'like', '%Importação%')
            ->count();

        return response()->json($importacao);
    }
}