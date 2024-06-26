<?php

namespace App\Http\Controllers;

use App\Models\Acesso;
use Illuminate\Http\Request;

class AcessoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Acesso  $acesso
     * @return \Illuminate\Http\Response
     */
    public function show(Acesso $acesso)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Acesso  $acesso
     * @return \Illuminate\Http\Response
     */
    public function edit(Acesso $acesso)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Acesso  $acesso
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Acesso $acesso)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Acesso  $acesso
     * @return \Illuminate\Http\Response
     */
    public function destroy(Acesso $acesso)
    {
        //
    }
}
