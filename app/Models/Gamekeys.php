<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gamekeys extends Model
{
    protected $table = 'gamekeys';

    protected $primaryKey = 'id';

    public function games() {
        return $this->belongsTo(Games::class, 'id');
    }
}
