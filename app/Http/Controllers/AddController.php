<?php

namespace App\Http\Controllers;

use App\Models\Gamekeys;
use App\Models\Games;

use App\Http\Requests\AddRequest;

class AddController extends Controller
{
    public function start() {
        $games = Games::all();
        return view('add')
            ->with('games', $games);
    }

    public function submit(AddRequest $req) {
        $newKey = new Gamekeys();
        $newKey->key_value = $req->input('key');
        $newKey->id_game = $req->input('game');
        $newKey->save();
        $games = Games::all();
        $req->key;
        return redirect()->route('add-submit')
            ->with('games', $games)
            ->with('success', 'Ключ успішно завантажений');
    }
}
