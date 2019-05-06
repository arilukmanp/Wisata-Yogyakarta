<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hit;
use App\Models\Category;
use App\Models\District;
use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontendController extends Controller
{
    public function index()
    {
        // dd(request()->getClientIp());
        
        $dateNow = Carbon::now()->toDateString();
        
        if (Hit::whereDate('created_at', $dateNow)->first()) {
            Hit::whereDate('created_at', $dateNow)
                ->first()
                ->update(['counter' => DB::raw('counter+1')]);
        }
        else {
            Hit::create(['counter' => '1']);
        }

        $category = Category::orderBy('name', 'asc')->get();

        return view('frontend.index', ['categories' => $category]);
    }
}
