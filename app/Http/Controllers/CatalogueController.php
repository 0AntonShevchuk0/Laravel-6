<?php

namespace App\Http\Controllers;

use App\Models\Gamekeys;
use App\Models\Games;
use App\Models\Genres;
use Illuminate\Support\Facades\DB;

class CatalogueController extends Controller
{
    public function getGames() {
        $data = DB::table('gamekeys')
            ->select(['gamekeys.id','id_game', 'games.title', 'games.image'])
            ->join('games', 'games.id', '=', 'gamekeys.id_game')
            ->orderBy('gamekeys.id')
            ->get();
        return view('catalogue')
            ->with('data', $data);
    }

    public function goToInfo($id, $id_game) {
        $gamekey = Gamekeys::find($id);

        $game = Games::find($id_game);

        $genres = Games::find($id_game)
            ->genres;

        $similarGames = Genres::find($genres[0]->id)
            ->games
            ->where('id', '<>' ,$id_game)
            ->take(3);

        return view('info')
            ->with('gamekey', $gamekey)
            ->with('game', $game)
            ->with('genres', $genres)
            ->with('similarGames', $similarGames);
    }
}
