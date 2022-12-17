<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $id = Auth::id();
        $user = Auth::user();

        if ($user->role === 2) {
            return view('home', [
                'id' => $id,
            ]);
        } elseif ($user->role === 1) {
            return view('admins.top', [
                'id' => $id,
            ]);
        }
    }
}
