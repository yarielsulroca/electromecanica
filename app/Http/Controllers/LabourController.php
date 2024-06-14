<?php

namespace App\Http\Controllers;

use App\Models\Labour;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\LabourRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class LabourController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $labours = Labour::paginate();

        return view('labour.index', compact('labours'))
            ->with('i', ($request->input('page', 1) - 1) * $labours->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $labour = new Labour();

        return view('labour.create', compact('labour'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LabourRequest $request): RedirectResponse
    {
        Labour::create($request->validated());

        return Redirect::route('labours.index')
            ->with('success', 'Labour created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $labour = Labour::find($id);

        return view('labour.show', compact('labour'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $labour = Labour::find($id);

        return view('labour.edit', compact('labour'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(LabourRequest $request, Labour $labour): RedirectResponse
    {
        $labour->update($request->validated());

        return Redirect::route('labours.index')
            ->with('success', 'Labour updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Labour::find($id)->delete();

        return Redirect::route('labours.index')
            ->with('success', 'Labour deleted successfully');
    }
}
