<?php

namespace App\Http\Controllers;

use App\Http\Requests\StaffStoreRequest;
use App\Http\Requests\StaffUpdateRequest;
use App\Models\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $staff = Staff::all();

        return view('staff.index', compact('staff'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('staff.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Staff $staff)
    {
        return view('staff.show', compact('staff'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Staff $staff)
    {
        return view('staff.edit', compact('staff'));
    }

    /**
     * @param \App\Http\Requests\StaffUpdateRequest $request
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function update(StaffUpdateRequest $request, Staff $staff)
    {
        $staff->update($request->validated());

        $request->session()->flash('staff.id', $staff->id);

        return redirect()->route('staff.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Staff $staff
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Staff $staff)
    {
        $staff->delete();

        return redirect()->route('staff.index');
    }

    /**
     * @param \App\Http\Requests\StaffStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(StaffStoreRequest $request)
    {
        $staff = Staff::create($request->validated());

        return redirect()->route('Staff.index');
    }

    public function myProfile()
    {
    }
    public function settings()
    {
    }
}
