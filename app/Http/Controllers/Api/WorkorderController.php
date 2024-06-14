<?php

namespace App\Http\Controllers\Api;

use App\Models\Workorder;
use Illuminate\Http\Request;
use App\Http\Requests\WorkorderRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\WorkorderResource;

class WorkorderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $workorders = Workorder::paginate();

        return WorkorderResource::collection($workorders);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(WorkorderRequest $request): Workorder
    {
        return Workorder::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Workorder $workorder): Workorder
    {
        return $workorder;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(WorkorderRequest $request, Workorder $workorder): Workorder
    {
        $workorder->update($request->validated());

        return $workorder;
    }

    public function destroy(Workorder $workorder): Response
    {
        $workorder->delete();

        return response()->noContent();
    }
}
