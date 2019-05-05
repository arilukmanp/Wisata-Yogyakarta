<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\District;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class DestinationController extends Controller
{
    public function index_bantul()
    {
        $data = Destination::where('district_id', 1)->orderBy('id', 'desc')->get();
        return view('dashboard.destination.index', ['destinations' => $data]);
    }

    public function index_gunungkidul()
    {
        $data = Destination::where('district_id', 2)->orderBy('id', 'desc')->get();
        return view('dashboard.destination.index', ['destinations' => $data]);
    }

    public function index_kulonprogo()
    {
        $data = Destination::where('district_id', 3)->orderBy('id', 'desc')->get();
        return view('dashboard.destination.index', ['destinations' => $data]);
    }

    public function index_sleman()
    {
        $data = Destination::where('district_id', 4)->orderBy('id', 'desc')->get();
        return view('dashboard.destination.index', ['destinations' => $data]);
    }

    public function index_yogyakarta()
    {
        $data = Destination::where('district_id', 5)->orderBy('id', 'desc')->get();
        return view('dashboard.destination.index', ['destinations' => $data]);
    }

    public function create()
    {
        $data = Category::all();
        return view('dashboard.destination.create', ['categories' => $data]);
    }

    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'category_id'    => 'required'
        // ]);


        $url = $request->path();


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


        Destination::create([
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

        return redirect($url)->with('success', 'Berhasil Menambahkan Data');
    }

    public function show($id)
    {
        $data = Destination::findOrFail($id);
        return view('dashboard.destination.single', ['destination' => $data]);
    }

    public function edit($id)
    {
        $destinations = Destination::findOrFail($id);
        $categories   = Category::all();
        return view('dashboard.destination.edit', ['destination' => $destinations, 'categories' => $categories]);
    }

    public function update(Request $request, $id)
    {
        $url = $request->path();

        Destination::find($id)->update([
            'name'           => $request->name,
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

        return redirect($url)->with('success', 'Berhasil Memperbarui Data');
    }

    public function destroy($id)
    {
        Destination::find($id)->delete();

        return back();
    }
}
