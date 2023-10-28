<?php

namespace App\Http\Controllers;

use App\Http\Requests\DutyActivityStoreRequest;
use App\Http\Requests\DutyActivityUpdateRequest;
use App\Models\DutyActivity;
use Illuminate\Http\Request;

class DutyActivityController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dutyActivities = DutyActivity::all();

        return view('dutyActivity.index', compact('dutyActivities'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('dutyActivity.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DutyActivity $dutyActivity
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, DutyActivity $dutyActivity)
    {
        return view('dutyActivity.show', compact('dutyActivity'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DutyActivity $dutyActivity
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, DutyActivity $dutyActivity)
    {
        return view('dutyActivity.edit', compact('dutyActivity'));
    }

    /**
     * @param \App\Http\Requests\DutyActivityUpdateRequest $request
     * @param \App\Models\DutyActivity $dutyActivity
     * @return \Illuminate\Http\Response
     */
    public function update(DutyActivityUpdateRequest $request, DutyActivity $dutyActivity)
    {
        $dutyActivity->update($request->validated());

        $request->session()->flash('dutyActivity.id', $dutyActivity->id);

        return redirect()->route('dutyActivity.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DutyActivity $dutyActivity
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, DutyActivity $dutyActivity)
    {
        $dutyActivity->delete();

        return redirect()->route('dutyActivity.index');
    }

    /**
     * @param \App\Http\Requests\DutyActivityStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DutyActivityStoreRequest $request)
    {
        $dutyActivity = DutyActivity::create($request->validated());

        return redirect()->route('DutyActivity.index');
    }
}
