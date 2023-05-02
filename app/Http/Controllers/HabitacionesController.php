<?php

namespace App\Http\Controllers;

use App\Models\Habitaciones;
use App\Http\Requests\StoreHabitacionesRequest;
use App\Http\Requests\UpdateHabitacionesRequest;

class HabitacionesController extends Controller
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
     * @param  \App\Http\Requests\StoreHabitacionesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHabitacionesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habitaciones  $habitaciones
     * @return \Illuminate\Http\Response
     */
    public function show(Habitaciones $habitaciones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habitaciones  $habitaciones
     * @return \Illuminate\Http\Response
     */
    public function edit(Habitaciones $habitaciones)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHabitacionesRequest  $request
     * @param  \App\Models\Habitaciones  $habitaciones
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHabitacionesRequest $request, Habitaciones $habitaciones)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Habitaciones  $habitaciones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habitaciones $habitaciones)
    {
        //
    }
}