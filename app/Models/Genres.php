<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genres extends Model
{
    protected $table = 'genres';

    protected $primaryKey = 'id';

    public function games() {
        return $this->belongsToMany(Games::class, 'gamesgenres', 'id_genre', 'id_game');
    }
}
