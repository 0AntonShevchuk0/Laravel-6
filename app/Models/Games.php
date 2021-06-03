<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Games extends Model
{
    protected $table = 'games';

    protected $primaryKey = 'id';

    public function gamekeys() {
        return $this->hasMany(Gamekeys::class, 'id_game');
    }

    public function genres() {
        return $this->belongsToMany(Genres::class, 'gamesgenres', 'id_game', 'id_genre');
    }
}
