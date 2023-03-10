<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Event;
use App\Reservation;

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
            $event = new Reservation;
            $events = $event->select('reservations.id as reservation_id', 'events.game_name', 'events.event_name', 'events.place', 'events.event_start', 'events.event_end', 'events.recruit_start', 'events.recruit_end', 'events.maximum')
                ->join('events', 'reservations.event_id', '=', 'events.id')
                ->where('reservations.user_id', $id)
                ->get();

            return view('home', [
                'id' => $id,
                'events' => $events,
            ]);
        } elseif ($user->role === 1) {
            $events = new Event();
            $events = $events->all()->toArray();
            $id = Auth::id();

            return view('admins.top', ['events' => $events, 'id' => $id]);
        }
    }

    public function adminTop(Request $request)
    {
    }
}