<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ClientController extends Controller
{
    public function index(): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application
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
        $client ->delete();
        return redirect()->route('index');

    }


    public function edit(Client $client): \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Contracts\View\View|Application
    {
        return view('clients/edit',[
            'client' => $client
        ]);
    }


}
