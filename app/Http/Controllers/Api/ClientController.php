<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use App\Http\Resources\ClientResource;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $clients = Client::paginate();

        return ClientResource::collection($clients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ClientRequest $request): Client
    {
        return Client::create($request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client): Client
    {
        return $client;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ClientRequest $request, Client $client): Client
    {
        $client->update($request->validated());

        return $client;
    }

    public function destroy(Client $client): Response
    {
        $client->delete();

        return response()->noContent();
    }
}
