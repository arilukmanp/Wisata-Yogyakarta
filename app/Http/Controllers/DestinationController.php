<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\District;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class DestinationController extends Controller
{
    public function index_bantul()
    {
        $data = Destination::where('district_id', 1)->orderBy('id', 'desc')->get();
        return view('dashboard.index', ['destinations' => $data]);
    }

    public function index_gunungkidul()
    {
        $data = Destination::where('district_id', 2)->orderBy('id', 'desc')->get();
        return view('dashboard.index', ['destinations' => $data]);
    }

    public function index_kulonprogo()
    {
        $data = Destination::where('district_id', 3)->orderBy('id', 'desc')->get();
        return view('dashboard.index', ['destinations' => $data]);
    }

    public function index_sleman()
    {
        $data = Destination::where('district_id', 4)->orderBy('id', 'desc')->get();
        return view('dashboard.index', ['destinations' => $data]);
    }

    public function index_yogyakarta()
    {
        $data = Destination::where('district_id', 5)->orderBy('id', 'desc')->get();
        return view('dashboard.index', ['destinations' => $data]);
    }

    public function create()
    {
        $data = Category::all();
        return view('dashboard.create', ['categories' => $data]);
    }

    public function store(Request $request)
    {
        $url = Route::current()->uri;


        if ($url == 'bantul') {
            $district = '1';
        }
        else if ($url == 'gunungkidul') {
            $district = '2';
        }
        else if ($url == 'kulonprogo') {
            $district = '3';
        }
        else if ($url == 'sleman') {
            $district = '4';
        }
        else if ($url == 'yogyakarta') {
            $district = '5';
        }


        $tes = Destination::create([
            'name'           => $request->name,
            'district_id'    => $district,
            'category_id'    => $request->category,
            'cost'           => $request->cost,
            'popularity'     => $request->popularity,
            'visitor'        => $request->visitor,
            'facilities'     => $request->facilities,
            'cleanliness'    => $request->cleanliness,
            'accessibility'  => $request->accessibility,
            'business_hours' => $request->business_hours,
            'address'        => $request->address
        ]);
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
        $data = Destination::find($id);
        $data->delete();

        return back();
    }
}
