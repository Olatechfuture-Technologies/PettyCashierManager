<?php

namespace App\Http\Controllers;

use App\Cashwallet;
use App\Http\Requests\HouseCashFlowStoreRequest;
use App\Http\Requests\HouseCashFlowUpdateRequest;
use App\Models\HouseCashFlow;
use Illuminate\Http\Request;

class HouseCashFlowController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $houseCashFlows = HouseCashFlow::all();

        return view('houseCashFlow.index', compact('houseCashFlows'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('houseCashFlow.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HouseCashFlow $houseCashFlow
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, HouseCashFlow $houseCashFlow)
    {
        return view('houseCashFlow.show', compact('houseCashFlow'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HouseCashFlow $houseCashFlow
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, HouseCashFlow $houseCashFlow)
    {
        return view('houseCashFlow.edit', compact('houseCashFlow'));
    }

    /**
     * @param \App\Http\Requests\HouseCashFlowUpdateRequest $request
     * @param \App\Models\HouseCashFlow $houseCashFlow
     * @return \Illuminate\Http\Response
     */
    public function update(HouseCashFlowUpdateRequest $request, HouseCashFlow $houseCashFlow)
    {
        $houseCashFlow->update($request->validated());

        $request->session()->flash('houseCashFlow.id', $houseCashFlow->id);

        return redirect()->route('houseCashFlow.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\HouseCashFlow $houseCashFlow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, HouseCashFlow $houseCashFlow)
    {
        $houseCashFlow->delete();

        return redirect()->route('houseCashFlow.index');
    }

    /**
     * @param \App\Http\Requests\HouseCashFlowStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HouseCashFlowStoreRequest $request)
    {
        $cashwallet = Cashwallet::create($request->validated());

        return redirect()->route('ResidentCashFlow.index');
    }
}
