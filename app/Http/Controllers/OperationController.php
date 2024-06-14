<?php

namespace App\Http\Controllers;

use App\Models\Operation;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\OperationRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class OperationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $operations = Operation::paginate();

        return view('operation.index', compact('operations'))
            ->with('i', ($request->input('page', 1) - 1) * $operations->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $operation = new Operation();

        return view('operation.create', compact('operation'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(OperationRequest $request): RedirectResponse
    {
        Operation::create($request->validated());

        return Redirect::route('operations.index')
            ->with('success', 'Operation created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $operation = Operation::find($id);

        return view('operation.show', compact('operation'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $operation = Operation::find($id);

        return view('operation.edit', compact('operation'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(OperationRequest $request, Operation $operation): RedirectResponse
    {
        $operation->update($request->validated());

        return Redirect::route('operations.index')
            ->with('success', 'Operation updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Operation::find($id)->delete();

        return Redirect::route('operations.index')
            ->with('success', 'Operation deleted successfully');
    }
}
