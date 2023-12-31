<?php

namespace App\Http\Controllers;

use App\Models\DataInformasi;
use Illuminate\Http\Request;

class DataInformasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(DataInformasi::latest()->get());
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
        DataInformasi::create($request->post());
        return response()->json($request->post());
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\DataInformasi  $dataInformasi
     * @return \Illuminate\Http\Response
     */
    public function show(DataInformasi $dataInformasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\DataInformasi  $dataInformasi
     * @return \Illuminate\Http\Response
     */
    public function edit(DataInformasi $dataInformasi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\DataInformasi  $dataInformasi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DataInformasi $informasi)
    {
        $informasi->update($request->post());
        return response()->json($request->post());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\DataInformasi  $dataInformasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(DataInformasi $dataInformasi)
    {
        //
    }
}
