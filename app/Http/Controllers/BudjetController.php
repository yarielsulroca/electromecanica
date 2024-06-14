<?php

namespace App\Http\Controllers;

use App\Models\Budjet;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\BudjetRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class BudjetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $budjets = Budjet::paginate();

        return view('budjet.index', compact('budjets'))
            ->with('i', ($request->input('page', 1) - 1) * $budjets->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $budjet = new Budjet();

        return view('budjet.create', compact('budjet'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BudjetRequest $request): RedirectResponse
    {
        Budjet::create($request->validated());

        return Redirect::route('budjets.index')
            ->with('success', 'Budjet created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $budjet = Budjet::find($id);

        return view('budjet.show', compact('budjet'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $budjet = Budjet::find($id);

        return view('budjet.edit', compact('budjet'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BudjetRequest $request, Budjet $budjet): RedirectResponse
    {
        $budjet->update($request->validated());

        return Redirect::route('budjets.index')
            ->with('success', 'Budjet updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Budjet::find($id)->delete();

        return Redirect::route('budjets.index')
            ->with('success', 'Budjet deleted successfully');
    }
}
