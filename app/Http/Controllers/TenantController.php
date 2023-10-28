<?php

namespace App\Http\Controllers;

use App\Http\Requests\TenantStoreRequest;
use App\Http\Requests\TenantUpdateRequest;
use App\Models\Flat;
use App\Models\Tenant;
use Illuminate\Http\Request;

class TenantController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $tenants = Tenant::all();

        return view('tenant.index', compact('tenants'));
    }
    public function dashboard(Request $request)
    {
        $tenants = Tenant::all();

        return view('tenant.index', compact('tenants'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('tenant.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tenant $tenant
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Tenant $tenant)
    {
        return view('tenant.show', compact('tenant'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tenant $tenant
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Tenant $tenant)
    {
        return view('tenant.edit', compact('tenant'));
    }

    /**
     * @param \App\Http\Requests\TenantUpdateRequest $request
     * @param \App\Models\Tenant $tenant
     * @return \Illuminate\Http\Response
     */
    public function update(TenantUpdateRequest $request, Tenant $tenant)
    {
        $tenant->update($request->validated());

        $request->session()->flash('tenant.id', $tenant->id);

        return redirect()->route('tenant.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Tenant $tenant
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Tenant $tenant)
    {
        $tenant->delete();

        return redirect()->route('tenant.index');
    }

    /**
     * @param \App\Http\Requests\TenantStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TenantStoreRequest $request)
    {
        $flat = Flat::create($request->validated());

        return redirect()->route('Flat.index');
    }

    public function myProfile()
    {
    }
    public function changePassword()
    {
    }
    public function settings()
    {
    }
}
