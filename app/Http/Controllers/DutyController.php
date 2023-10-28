<?php

namespace App\Http\Controllers;

use App\Http\Requests\DutyStoreRequest;
use App\Http\Requests\DutyUpdateRequest;
use App\Models\Duty;
use Illuminate\Http\Request;

class DutyController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $duties = Duty::all();

        return view('duty.index', compact('duties'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('duty.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Duty $duty
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Duty $duty)
    {
        return view('duty.show', compact('duty'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Duty $duty
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Duty $duty)
    {
        return view('duty.edit', compact('duty'));
    }

    /**
     * @param \App\Http\Requests\DutyUpdateRequest $request
     * @param \App\Models\Duty $duty
     * @return \Illuminate\Http\Response
     */
    public function update(DutyUpdateRequest $request, Duty $duty)
    {
        $duty->update($request->validated());

        $request->session()->flash('duty.id', $duty->id);

        return redirect()->route('duty.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Duty $duty
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Duty $duty)
    {
        $duty->delete();

        return redirect()->route('duty.index');
    }

    /**
     * @param \App\Http\Requests\DutyStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DutyStoreRequest $request)
    {
        $duty = Duty::create($request->validated());

        return redirect()->route('Duty.index');
    }
}
