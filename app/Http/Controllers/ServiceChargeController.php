<?php

namespace App\Http\Controllers;

use App\Http\Requests\ServiceChargeStoreRequest;
use App\Http\Requests\ServiceChargeUpdateRequest;
use App\Models\ServiceCharge;
use App\Models\Wallet;
use Illuminate\Http\Request;

class ServiceChargeController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $serviceCharges = ServiceCharge::all();

        return view('serviceCharge.index', compact('serviceCharges'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('serviceCharge.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ServiceCharge $serviceCharge
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, ServiceCharge $serviceCharge)
    {
        return view('serviceCharge.show', compact('serviceCharge'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ServiceCharge $serviceCharge
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, ServiceCharge $serviceCharge)
    {
        return view('serviceCharge.edit', compact('serviceCharge'));
    }

    /**
     * @param \App\Http\Requests\ServiceChargeUpdateRequest $request
     * @param \App\Models\ServiceCharge $serviceCharge
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceChargeUpdateRequest $request, ServiceCharge $serviceCharge)
    {
        $serviceCharge->update($request->validated());

        $request->session()->flash('serviceCharge.id', $serviceCharge->id);

        return redirect()->route('serviceCharge.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\ServiceCharge $serviceCharge
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, ServiceCharge $serviceCharge)
    {
        $serviceCharge->delete();

        return redirect()->route('serviceCharge.index');
    }

    /**
     * @param \App\Http\Requests\ServiceChargeStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceChargeStoreRequest $request)
    {
        $wallet = Wallet::create($request->validated());

        return redirect()->route('Wallet.index');
    }
}
