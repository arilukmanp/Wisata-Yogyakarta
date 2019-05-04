<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {   
        $hits        = DB::table('hits')->orderBy('id', 'desc')->take(7)->get([DB::raw('Date(created_at) as date'), DB::raw('counter')])->toJSON();
        $bantul      = Destination::where('district_id', 1)->count();
        $gunungkidul = Destination::where('district_id', 2)->count();
        $kulonprogo  = Destination::where('district_id', 3)->count();
        $sleman      = Destination::where('district_id', 4)->count();
        $yogyakarta  = Destination::where('district_id', 5)->count();

        return view('dashboard.home', [
            'hits' => $hits,
            'bantul'      => $bantul,
            'gunungkidul' => $gunungkidul,
            'kulonprogo'  => $kulonprogo,
            'sleman'      => $sleman,
            'yogyakarta'  => $yogyakarta
        ]);
    }
}
