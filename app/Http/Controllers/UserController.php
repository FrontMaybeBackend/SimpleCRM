<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class UserController extends Controller
{



    public function index(): \Illuminate\View\View
    {
        return view('user.users', [
            'users' => User::paginate(5),
        ]);

    }

    public function destroy(User $user): RedirectResponse
    {
        $user->delete();
        return redirect()->route('user.users');
    }

}
