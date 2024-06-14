<?php

namespace App\Http\Controllers;

use App\Models\Part;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\PartRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class PartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $parts = Part::paginate();

        return view('part.index', compact('parts'))
            ->with('i', ($request->input('page', 1) - 1) * $parts->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $part = new Part();

        return view('part.create', compact('part'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PartRequest $request): RedirectResponse
    {
        Part::create($request->validated());

        return Redirect::route('parts.index')
            ->with('success', 'Part created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $part = Part::find($id);

        return view('part.show', compact('part'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $part = Part::find($id);

        return view('part.edit', compact('part'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PartRequest $request, Part $part): RedirectResponse
    {
        $part->update($request->validated());

        return Redirect::route('parts.index')
            ->with('success', 'Part updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Part::find($id)->delete();

        return Redirect::route('parts.index')
            ->with('success', 'Part deleted successfully');
    }
}
