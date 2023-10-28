<?php

namespace App\Http\Controllers;

use App\Http\Requests\TenantWalletStoreRequest;
use App\Http\Requests\TenantWalletUpdateRequest;
use App\Models\TenantWallet;
use Illuminate\Http\Request;

class TenantWalletController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tenantWallets = TenantWallet::all();

        return view('tenantWallet.index', compact('tenantWallets'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('tenantWallet.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TenantWallet $tenantWallet
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, TenantWallet $tenantWallet)
    {
        return view('tenantWallet.show', compact('tenantWallet'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TenantWallet $tenantWallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, TenantWallet $tenantWallet)
    {
        return view('tenantWallet.edit', compact('tenantWallet'));
    }

    /**
     * @param \App\Http\Requests\TenantWalletUpdateRequest $request
     * @param \App\Models\TenantWallet $tenantWallet
     * @return \Illuminate\Http\Response
     */
    public function update(TenantWalletUpdateRequest $request, TenantWallet $tenantWallet)
    {
        $tenantWallet->update($request->validated());

        $request->session()->flash('tenantWallet.id', $tenantWallet->id);

        return redirect()->route('tenantWallet.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\TenantWallet $tenantWallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, TenantWallet $tenantWallet)
    {
        $tenantWallet->delete();

        return redirect()->route('tenantWallet.index');
    }

    /**
     * @param \App\Http\Requests\TenantWalletStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenantWalletStoreRequest $request)
    {
        $tenantWallet = TenantWallet::create($request->validated());

        return redirect()->route('TenantWallet.index');
    }
}
