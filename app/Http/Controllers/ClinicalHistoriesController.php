<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreClinicalHistoriesRequest;
use App\Http\Requests\UpdateClinicalHistoriesRequest;
use App\Models\ClinicalHistories;

class ClinicalHistoriesController extends Controller
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
    public function store(StoreClinicalHistoriesRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ClinicalHistories $clinicalHistories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ClinicalHistories $clinicalHistories)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClinicalHistoriesRequest $request, ClinicalHistories $clinicalHistories)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ClinicalHistories $clinicalHistories)
    {
        //
    }
}
