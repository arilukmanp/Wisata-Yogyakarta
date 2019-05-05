<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Category::orderBy('id', 'desc')->get();
        return view('dashboard.category.index', ['categories' => $data]);
    }

    public function create()
    {
        return view('dashboard.category.create');
    }

    public function store(Request $request)
    {
        $url = $request->path();

        Category::create([
            'name' => $request->name
            ]);
            
        return redirect($url)->with('success', 'Berhasil Menambahkan Data');
    }

    public function edit($id)
    {
        $data = Category::findOrFail($id);
        return view('dashboard.category.edit', ['category' => $data]);
    }

    public function update(Request $request, $id)
    {
        $url = $request->segment(1)."/".$request->segment(2);

        Category::find($id)->update([
            'name' => $request->name
        ]);

        return redirect($url)->with('success', 'Berhasil Memperbarui Data');
    }

    public function destroy($id)
    {
        Category::find($id)->delete();

        return back();
    }
}
