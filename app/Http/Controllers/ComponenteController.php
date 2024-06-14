<?php

namespace App\Http\Controllers;

use App\Models\Componente;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\ComponenteRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ComponenteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $componentes = Componente::paginate();

        return view('componente.index', compact('componentes'))
            ->with('i', ($request->input('page', 1) - 1) * $componentes->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $componente = new Componente();

        return view('componente.create', compact('componente'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ComponenteRequest $request): RedirectResponse
    {
        Componente::create($request->validated());

        return Redirect::route('componentes.index')
            ->with('success', 'Componente created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $componente = Componente::find($id);

        return view('componente.show', compact('componente'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $componente = Componente::find($id);

        return view('componente.edit', compact('componente'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ComponenteRequest $request, Componente $componente): RedirectResponse
    {
        $componente->update($request->validated());

        return Redirect::route('componentes.index')
            ->with('success', 'Componente updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Componente::find($id)->delete();

        return Redirect::route('componentes.index')
            ->with('success', 'Componente deleted successfully');
    }
}
