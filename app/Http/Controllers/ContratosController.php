<?php

namespace App\Http\Controllers;

use App\Models\contratos;
use App\Http\Requests\StorecontratosRequest;
use App\Http\Requests\UpdatecontratosRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContratosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    public function añadir( Request $request){


        $contratos = new contratos();

        $contratos->NombreTitular = $request->nombre;
        $contratos->PlanContratado = $request->contrato;
        $contratos->FechaContrato = $request->fecha;

        $contratos->save();
        //return $request->all();
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StorecontratosRequest $request)
    {

    }

    /**
     * Display the specified resource.
     */
    public function show(contratos $contratos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(contratos $contratos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecontratosRequest $request, contratos $contratos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(contratos $contratos)
    {
        //
    }
}
