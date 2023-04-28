<?php

namespace App\Http\Controllers;
use App\Models\Funcionarios;

use Illuminate\Http\Request;

class FuncionariosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $funcionarios = Funcionarios::latest()->get();
    
        return view('funcionarios.index',compact('funcionarios'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('funcionarios.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store($funcionario)
    {
        return $funcionario;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}