<?php

namespace App\Http\Controllers;

use App\Http\Requests\TenantCashFlowStoreRequest;
use App\Http\Requests\TenantCashFlowUpdateRequest;
use App\Models\TenantCashFlow;
use Illuminate\Http\Request;

class TenantCashFlowController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tenantCashFlows = TenantCashFlow::all();

        return view('tenantCashFlow.index', compact('tenantCashFlows'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('tenantCashFlow.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TenantCashFlow $tenantCashFlow
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, TenantCashFlow $tenantCashFlow)
    {
        return view('tenantCashFlow.show', compact('tenantCashFlow'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TenantCashFlow $tenantCashFlow
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, TenantCashFlow $tenantCashFlow)
    {
        return view('tenantCashFlow.edit', compact('tenantCashFlow'));
    }

    /**
     * @param \App\Http\Requests\TenantCashFlowUpdateRequest $request
     * @param \App\Models\TenantCashFlow $tenantCashFlow
     * @return \Illuminate\Http\Response
     */
    public function update(TenantCashFlowUpdateRequest $request, TenantCashFlow $tenantCashFlow)
    {
        $tenantCashFlow->update($request->validated());

        $request->session()->flash('tenantCashFlow.id', $tenantCashFlow->id);

        return redirect()->route('tenantCashFlow.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TenantCashFlow $tenantCashFlow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, TenantCashFlow $tenantCashFlow)
    {
        $tenantCashFlow->delete();

        return redirect()->route('tenantCashFlow.index');
    }

    /**
     * @param \App\Http\Requests\TenantCashFlowStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenantCashFlowStoreRequest $request)
    {
        $tenantCashFlow = TenantCashFlow::create($request->validated());

        return redirect()->route('TenantWallet.index');
    }
}
