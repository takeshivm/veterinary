<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOwnersRequest;
use App\Http\Requests\UpdateOwnersRequest;
use App\Models\Owners;
use Illuminate\Http\Response;
use Illuminate\View\View;

class OwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index(): View
    {
        $owners = Owners::all();
        return view('owners.index', ['owners' => $owners]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('owners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOwnersRequest $request)
    {
        //
        $first_name = $request->input('first_name');
        $last_name = $request->input('last_name');
        $address = $request->input('address');
        $phone = $request->input('phone');

        $owner = new Owners();
        $owner->first_name = $first_name;
        $owner->last_name = $last_name;
        $owner->address = $address;
        $owner->phone = $phone;

        $owner->save();
        return redirect()->route('owners.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Owners $owners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Owners $owners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOwnersRequest $request, Owners $owners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Owners $owners)
    {
        //
    }

}
