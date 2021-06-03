<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamesgenres extends Model
{
    protected $table = 'gamesgenres';

    public function games() {
        return $this->hasMany(Games::class, 'id_game');
    }

    public function genres() {
        return $this->hasMany(Genres::class, 'id_genre');
    }
}
