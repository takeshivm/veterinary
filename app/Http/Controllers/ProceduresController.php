<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProceduresRequest;
use App\Http\Requests\UpdateProceduresRequest;
use App\Models\Procedures;

class ProceduresController extends Controller
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

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProceduresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Procedures $procedures)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Procedures $procedures)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProceduresRequest $request, Procedures $procedures)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Procedures $procedures)
    {
        //
    }
}
