<?php

namespace App\Http\Controllers;

use App\Http\Requests\FlatStoreRequest;
use App\Http\Requests\FlatUpdateRequest;
use App\Models\Flat;
use Illuminate\Http\Request;

class FlatController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $flats = Flat::all();

        return view('flat.index', compact('flats'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('flat.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Flat $flat
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Flat $flat)
    {
        return view('flat.show', compact('flat'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Flat $flat
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Flat $flat)
    {
        return view('flat.edit', compact('flat'));
    }

    /**
     * @param \App\Http\Requests\FlatUpdateRequest $request
     * @param \App\Models\Flat $flat
     * @return \Illuminate\Http\Response
     */
    public function update(FlatUpdateRequest $request, Flat $flat)
    {
        $flat->update($request->validated());

        $request->session()->flash('flat.id', $flat->id);

        return redirect()->route('flat.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Flat $flat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Flat $flat)
    {
        $flat->delete();

        return redirect()->route('flat.index');
    }

    /**
     * @param \App\Http\Requests\FlatStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(FlatStoreRequest $request)
    {
        $flat = Flat::create($request->validated());

        return redirect()->route('Flat.index');
    }
    public function flatWallet()
    {
        return redirect()->route('Flat.index');
    }
}
