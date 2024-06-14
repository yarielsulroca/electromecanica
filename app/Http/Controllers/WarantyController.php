<?php

namespace App\Http\Controllers;

use App\Models\Waranty;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\WarantyRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class WarantyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $waranties = Waranty::paginate();

        return view('waranty.index', compact('waranties'))
            ->with('i', ($request->input('page', 1) - 1) * $waranties->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $waranty = new Waranty();

        return view('waranty.create', compact('waranty'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WarantyRequest $request): RedirectResponse
    {
        Waranty::create($request->validated());

        return Redirect::route('waranties.index')
            ->with('success', 'Waranty created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $waranty = Waranty::find($id);

        return view('waranty.show', compact('waranty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $waranty = Waranty::find($id);

        return view('waranty.edit', compact('waranty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WarantyRequest $request, Waranty $waranty): RedirectResponse
    {
        $waranty->update($request->validated());

        return Redirect::route('waranties.index')
            ->with('success', 'Waranty updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Waranty::find($id)->delete();

        return Redirect::route('waranties.index')
            ->with('success', 'Waranty deleted successfully');
    }
}
