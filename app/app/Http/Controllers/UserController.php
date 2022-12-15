<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    protected $user;
    /**
     * コンストラクタ
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * 画面表示件データ一件取得用
     */
    public function getEdit($id)
    {
        $user = $this->user->selectUserFindById($id);
        // 'users.edit'は後程作成するviewを指定しています。
        return view('users.edit', [
            'user' => $user,
        ]);
    }
    public function postEdit(int $id, Request $request)
    {
        $instance = new User;
        $record = $instance->find($id);

        $coloums = ['name', 'email'];

        foreach ($coloums as $coloum) {
            $record->$coloum = $request->$coloum;
        }
        $record->save();
        return redirect('/');
    }
}
