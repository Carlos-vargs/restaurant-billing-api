<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWaiterRequest;
use App\Http\Requests\UpdateWaiterRequest;
use App\Http\Resources\WaiterResource;
use App\Models\Waiter;

class WaiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return WaiterResource::collection(Waiter::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreWaiterRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWaiterRequest $request)
    {
        $fiels = $request->validated();

        $waiter = Waiter::create($fiels);

        return WaiterResource::make($waiter);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateWaiterRequest  $request
     * @param  \App\Models\Waiter  $waiter
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateWaiterRequest $request, Waiter $waiter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Waiter  $waiter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Waiter $waiter)
    {
        //
    }
}
