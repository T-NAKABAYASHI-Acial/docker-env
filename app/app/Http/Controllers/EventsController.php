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
        $id = Auth::id();

        return view('admins.registration', [
            'id' => $id,
        ]);
    }
    protected function create(Event $event, Request $request)
    {
        $id = Auth::id();

        $event->create([
            'user_id' => $id,
            'event_name' => $request->event_name,
            'game_name' => $request->game_name,
            'place' => $request->place,
            'event_start' => $request->event_start,
            'event_end' => $request->event_end,
            'recruit_start' => $request->recruit_start,
            'recruit_end' => $request->recruit_end,
            'maximum' => $request->maximum,
        ]);

        return view('/', [
            'id' => $id,
        ]);
    }

    public function store(Request $request)
    {
        // //バリデーション
        // $validator = Validator::make($request->all(), [
        //     'game_name' => 'required|max:255',
        //     'event_name' => 'required|max:255',
        // ]);

        // //バリデーション:エラー
        // if ($validator->fails()) {
        //     return redirect('/')
        //         ->withInput()
        //         ->withErrors($validator);
        // }

        $events = new Event;
        // $events->game_name = $request->game_name;
        // $events->event_name = $request->event_name;
        $events->user_id = Auth::id(); //ここでログインしているユーザidを登録しています
        $events->save();

        return redirect('/');
    }
}
