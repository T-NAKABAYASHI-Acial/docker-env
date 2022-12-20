<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\Reservation;
use App\User;
use Validator;


class EventsController extends Controller
{
    private $formItems = ["game_name", "event_name", "place", "event_start", "event_end", "maximum", "recruit_start", "recruit_end"];

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function createForm()
    {
        return view('admins.registration');
    }

    public function confirm(Request $request)
    {

        $event = $request->only($this->formItems);
        return view('admins.confirm', [
            'event' => $event,
        ]);
    }
    public function complete()
    {
        return view('admins.complete');
    }

    public function store(Request $request, Event $event)
    {
        $events = new Event;
        $id = Auth::id();

        $events->user_id = $id;

        $events->event_name = $request->event_name;

        $events->game_name = $request->game_name;

        $events->place = $request->place;

        $events->event_start = $request->event_start;

        $events->event_end = $request->event_end;

        $events->recruit_start = $request->recruit_start;

        $events->recruit_end = $request->recruit_end;

        $events->maximum = $request->maximum;

        $events->save();

        return route('admins.top');
    }

    public function events()
    {
        $events = new Event();
        $events = $events->all()->toArray();
        $id = Auth::id();

        return view('users.events', ['events' => $events, 'id' => $id]);
    }

    public function detail(int $id)
    {
        $event = new Event;
        $event = $event->find($id);

        return view('users.eventDetail', ['event' => $event]);
    }

    public function reserve(Request $request)
    {
        $reservation = new Reservation;
        $id = Auth::id();
        $reservation->user_id = $id;
        $reservation->event_id = $request->id;
        $reservation->save();

        return view('users.reserveComplete');
    }

    public function reserveDetail(int $id)
    {
        $event = new Reservation;
        $event = $event->select('reservations.id as reservation_id', 'events.game_name', 'events.event_name', 'events.place', 'events.event_start', 'events.event_end', 'events.recruit_start', 'events.recruit_end', 'events.maximum')
            ->join('events', 'reservations.event_id', '=', 'events.id')
            ->where('reservations.id', $id)
            ->get()->first();

        return view('users.reserveDetail', ['event' => $event]);
    }

    public function reserveDelete(Request $request)
    {
        $event = new Reservation;
        $event = $event->where('id', $request->id)->delete();

        return view('users.reserveDelete');
    }
}