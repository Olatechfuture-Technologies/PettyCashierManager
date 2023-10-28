<?php

namespace App\Http\Controllers;

use App\Http\Requests\HouseStoreRequest;
use App\Http\Requests\HouseUpdateRequest;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $houses = House::all();

        return view('house.index', compact('houses'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('house.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, House $house)
    {
        return view('house.show', compact('house'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, House $house)
    {
        return view('house.edit', compact('house'));
    }

    /**
     * @param \App\Http\Requests\HouseUpdateRequest $request
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function update(HouseUpdateRequest $request, House $house)
    {
        $house->update($request->validated());

        $request->session()->flash('house.id', $house->id);

        return redirect()->route('house.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\House $house
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, House $house)
    {
        $house->delete();

        return redirect()->route('house.index');
    }

    /**
     * @param \App\Http\Requests\HouseStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(HouseStoreRequest $request)
    {
        $house = House::create($request->validated());

        return redirect()->route('House.index');
    }
}
