<?php

namespace App\Http\Controllers;

use App\Terima;
use Illuminate\Http\Request;

class TerimaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswas = Terima::paginate(10);

        return view('terima.index', ['terimas' => $mahasiswas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
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
     * @param  \App\Terima  $terima
     * @return \Illuminate\Http\Response
     */
    public function show(Terima $terima)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Terima  $terima
     * @return \Illuminate\Http\Response
     */
    public function edit(Terima $terima)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Terima  $terima
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terima $terima)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Terima  $terima
     * @return \Illuminate\Http\Response
     */
    public function destroy(Terima $terima)
    {
        //
    }
}
