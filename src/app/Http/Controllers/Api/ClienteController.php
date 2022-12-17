<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    //    return Cliente::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        // $request->set('charsets','UTF-8');
        // dd($request);
        $cliente = Cliente::create($request->all());

        return response()->json([
            'status' => true,
            'message' => "Cliente cadastrado com sucesso!",
            'cliente' => $cliente
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cliente  $Cliente
     * @return \Illuminate\Http\Response
     */
    public function show(Cliente $cliente)
    {
        $cliente = $cliente->findOrFail($cliente->id);

        return response()->json([
            "status" => true,
            "cliente" => $cliente
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cliente  $Cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Cliente $Cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cliente  $Cliente
     * @return \Illuminate\Http\Response
     */
    public function update(StoreClienteRequest $request, Cliente $cliente)
    {
        $cliente->update($request->all());
        
        return response()->json([
            'status' => true,
            'message' => "Cliente atualizado com sucesso!",
            'cliente' => $cliente
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $Cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return response()->json([
            'status' => true,
            'message' => "Cliente deletado com sucesso!"
        ], 200);
    }


    public function selectPorPlaca(Cliente $cliente, $finalPlaca)
    {

        //
        $clientes = $cliente->where('placa_carro', 'like', "%$finalPlaca")->get();

        return response()->json([
            "status" => true,
            "clientes" => $clientes
        ]);
    }
}
