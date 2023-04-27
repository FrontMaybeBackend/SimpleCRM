<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\Client\ClientRequest;
use App\Models\Client;
use Illuminate\Http\RedirectResponse;

class ClientController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('clients/index', [
            'clients' => Client::paginate(5)
        ]);
    }

    /**
     * @param $id
     * @return RedirectResponse
     */
    public function destroy($id): RedirectResponse
    {
        $client = Client::findorFail($id);
        $client->delete();
        return redirect()->route('index');

    }


    public function edit(Client $client): \Illuminate\View\View
    {
        return view('clients.edit', [
            'client' => $client
        ]);
    }


    public function update(ClientRequest $request, Client $client): RedirectResponse
    {
        $client->update($request->validated());
        return redirect()->route('index');
    }

    public function create(): \Illuminate\View\View
    {
        return view('clients/create');
    }


    public function store(ClientRequest $request): RedirectResponse
    {
        Client::create($request->validated());
        return redirect()->route('index');

    }

}
