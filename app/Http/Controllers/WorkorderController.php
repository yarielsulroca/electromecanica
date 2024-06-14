<?php

namespace App\Http\Controllers;

use App\Http\Requests\WorkorderRequest;
use App\Models\Client;
use App\Models\Workorder;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class WorkorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $workorders = Workorder::with('client')->paginate();

        return view('workorder.index', compact('workorders'))
            ->with('i', ($request->input('page', 1) - 1) * $workorders->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $workorder = new Workorder();

        return view('workorder.create', compact('workorder'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkorderRequest $request): RedirectResponse
    {
        Workorder::create($request->validated());

        return Redirect::route('workorders.index')
            ->with('success', 'Workorder created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $workorder = Workorder::find($id);

        return view('workorder.show', compact('workorder'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $workorder = Workorder::find($id);

        return view('workorder.edit', compact('workorder'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkorderRequest $request, Workorder $workorder): RedirectResponse
    {
        $workorder->update($request->validated());

        return Redirect::route('workorders.index')
            ->with('success', 'Workorder updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Workorder::find($id)->delete();

        return Redirect::route('workorders.index')
            ->with('success', 'Workorder deleted successfully');
    }

    public function workordersByClient()
    {
        $clients = Client::withCount('workorders')->get();

        return view('workorders.chart', compact('clients'));
    }
}
