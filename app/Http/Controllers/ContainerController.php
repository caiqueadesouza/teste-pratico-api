<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContainerRequest;
use App\Models\Container;
use Illuminate\Http\Request;

class ContainerController extends Controller
{

    public function index()
    {
        $containers = Container::all();
        return response()->json($containers);
    }

    public function store(ContainerRequest $request)
    {

        //TEST1234567
        $letras = substr($request->numero, 0, -7);
        $numeros = substr($request->numero, -7);

        // var_dump($letras);
        if (!ctype_alpha($letras)) {
            //echo "error, tem numeros";
            return response()->json(['message' => 'Número de container invalido'], 422);
        }
        // var_dump($numeros);
        if (!ctype_digit($numeros)) {
            //echo 'error, tem letras';
            return response()->json(['message' => 'Número de container invalido'], 422);
        }

        $container = new Container($request->all());
        //Transforma em maiuscula
        $container->numero = strtoupper($request->numero);
        $container->save();
        return response()->json($container);
    }

    public function show($id)
    {
        $container = Container::findOrFail($id);
        return response()->json($container);
    }

    public function update(ContainerRequest $request, $id)
    {
        //TEST1234567
        $letras = substr($request->numero, 0, -7);
        $numeros = substr($request->numero, -7);

        // var_dump($letras);
        if (!ctype_alpha($letras)) {
            //echo "error, tem numeros";
            return response()->json(['message' => 'Número de container invalido'], 422);
        }
        // var_dump($numeros);
        if (!ctype_digit($numeros)) {
            //echo 'error, tem letras';
            return response()->json(['message' => 'Número de container invalido'], 422);
        }

        $container = Container::findOrFail($id);
        //Transforma em maiuscula
        $container->numero = strtoupper($request->numero);
        $container->update($request->all());
        return response()->json($container);
    }

    public function destroy($id)
    {
        $container = Container::destroy($id);
        return response()->json($container);
    }
}
