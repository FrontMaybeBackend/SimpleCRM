<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Client;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\View;
use Symfony\Component\Console\Input\Input;

class ClientController extends Controller
{
    public function index(): \Illuminate\View\View
    {
        return view('clients/index', [
            'clients' => Client::all()
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


    public function update(PostRequest $request, Client $client): RedirectResponse
    {
        $client = Client::findOrFail($request->id);
        $client->dd($request->all());
        $client->save();
        return redirect()->route('index');
    }


    public function create(): \Illuminate\View\View
    {
        return view('clients/create');
    }


    public function store(PostRequest $request): RedirectResponse
    {
        $client = new Client($request->validated());
        $client->save();
        return redirect(route('index'));

    }

}
