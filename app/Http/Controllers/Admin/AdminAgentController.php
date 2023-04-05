<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreAgentRequest;
use App\Http\Requests\UpdateAgentRequest;
use App\Models\Agent;
use App\Http\Controllers\Controller;

class AdminAgentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agents = Agent::get();
        return view('admin.agents.index', compact('agents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.agents.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAgentRequest $request)
    {
        Agent::create($request->all());
        return to_route('admin.agents.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Agent $agent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Agent $agent)
    {
        return view('admin.agents.edit', compact('agent'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAgentRequest $request, Agent $agent)
    {
        $agent->fill($request->all())->save();
        return to_route('admin.agents.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Agent $agent)
    {
        $agent->delete();
        return response()->json(['success'=>true]);
    }
}
