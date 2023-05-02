<?php

namespace App\Http\Controllers;

use App\Models\Huespedes;
use App\Http\Requests\StoreHuespedesRequest;
use App\Http\Requests\UpdateHuespedesRequest;

class HuespedesController extends Controller
{
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
     * @param  \App\Http\Requests\StoreHuespedesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHuespedesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Huespedes  $huespedes
     * @return \Illuminate\Http\Response
     */
    public function show(Huespedes $huespedes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Huespedes  $huespedes
     * @return \Illuminate\Http\Response
     */
    public function edit(Huespedes $huespedes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHuespedesRequest  $request
     * @param  \App\Models\Huespedes  $huespedes
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHuespedesRequest $request, Huespedes $huespedes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Huespedes  $huespedes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Huespedes $huespedes)
    {
        //
    }
}
