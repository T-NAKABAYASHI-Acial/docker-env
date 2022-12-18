<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as AuthUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Event;
use App\User;
use Validator;


class EventsController extends Controller
{

    public function createForm(Event $event)
    {
        return view('admins.registration', [
            'event' => $event,
        ]);
    }

    public function store(Request $request, Event $event)
    {
        $events = new Event;

        $events->user_id = $event;

        $events->event_name = $request->event_name;

        $events->game_name = $request->game_name;

        $events->place = $request->place;

        $events->event_start = $request->event_start;

        $events->event_end = $request->event_end;

        $events->recruit_start = $request->recruit_start;

        $events->recruit_end = $request->recruit_end;

        $events->maximum = $request->maximum;

        $events->save();

        return view('admins.top');
        // // //バリデーション
        // // $validator = Validator::make($request->all(), [
        // //     'game_name' => 'required|max:255',
        // //     'event_name' => 'required|max:255',
        // // ]);

        // // //バリデーション:エラー
        // // if ($validator->fails()) {
        // //     return redirect('/')
        // //         ->withInput()
        // //         ->withErrors($validator);
        // // }

        // $events = new Event;
        // // $events->game_name = $request->game_name;
        // // $events->event_name = $request->event_name;
        // $events->user_id = Auth::id(); //ここでログインしているユーザidを登録しています
        // $events->save();

        // return redirect('/');
    }
}
