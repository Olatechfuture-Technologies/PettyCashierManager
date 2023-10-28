<?php

namespace App\Http\Controllers;

use App\Http\Requests\DutyPostStoreRequest;
use App\Http\Requests\DutyPostUpdateRequest;
use App\Models\DutyPost;
use Illuminate\Http\Request;

class DutyPostController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $dutyPosts = DutyPost::all();

        return view('dutyPost.index', compact('dutyPosts'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('dutyPost.create');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DutyPost $dutyPost
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, DutyPost $dutyPost)
    {
        return view('dutyPost.show', compact('dutyPost'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DutyPost $dutyPost
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, DutyPost $dutyPost)
    {
        return view('dutyPost.edit', compact('dutyPost'));
    }

    /**
     * @param \App\Http\Requests\DutyPostUpdateRequest $request
     * @param \App\Models\DutyPost $dutyPost
     * @return \Illuminate\Http\Response
     */
    public function update(DutyPostUpdateRequest $request, DutyPost $dutyPost)
    {
        $dutyPost->update($request->validated());

        $request->session()->flash('dutyPost.id', $dutyPost->id);

        return redirect()->route('dutyPost.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DutyPost $dutyPost
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, DutyPost $dutyPost)
    {
        $dutyPost->delete();

        return redirect()->route('dutyPost.index');
    }

    /**
     * @param \App\Http\Requests\DutyPostStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(DutyPostStoreRequest $request)
    {
        $dutyPost = DutyPost::create($request->validated());

        return redirect()->route('DutyPost.index');
    }
}
