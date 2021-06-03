<?php

namespace App\Http\Controllers;

use App\Models\Gamekeys;

class InfoController extends Controller
{
    public function getKey($id) {
        $key = Gamekeys::find($id)
            ->key_value;
        Gamekeys::find($id)
            ->delete();
        return view('key')
            ->with('key', $key);
    }
}
