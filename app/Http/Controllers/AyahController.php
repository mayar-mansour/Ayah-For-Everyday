<?php

namespace App\Http\Controllers;

use App\Models\DailyAyah;
use Illuminate\Http\Request;

class AyahController extends Controller
{

    public function today()
    {
        $today = now()->startOfDay();
        $ayah = DailyAyah::where('date', $today)->first();

        if (!$ayah) {
            abort(404, "No Ayah found for today.");
        }

        return view('ayah.today', compact('ayah'));
    }
}
