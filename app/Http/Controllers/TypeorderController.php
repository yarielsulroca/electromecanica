<?php

namespace App\Http\Controllers;

use App\Models\Typeorder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\TypeorderRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class TypeorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $typeorders = Typeorder::paginate();

        return view('typeorder.index', compact('typeorders'))
            ->with('i', ($request->input('page', 1) - 1) * $typeorders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $typeorder = new Typeorder();

        return view('typeorder.create', compact('typeorder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TypeorderRequest $request): RedirectResponse
    {
        Typeorder::create($request->validated());

        return Redirect::route('typeorders.index')
            ->with('success', 'Typeorder created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $typeorder = Typeorder::find($id);

        return view('typeorder.show', compact('typeorder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $typeorder = Typeorder::find($id);

        return view('typeorder.edit', compact('typeorder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TypeorderRequest $request, Typeorder $typeorder): RedirectResponse
    {
        $typeorder->update($request->validated());

        return Redirect::route('typeorders.index')
            ->with('success', 'Typeorder updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Typeorder::find($id)->delete();

        return Redirect::route('typeorders.index')
            ->with('success', 'Typeorder deleted successfully');
    }
}
