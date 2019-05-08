<?php

namespace App\Http\Controllers;

use App\Models\Fuzzy;
use Illuminate\Http\Request;

class FuzzyController extends Controller
{
    public function index()
    {
        $popularity1 = Fuzzy::where('id', '1')->first();
        $popularity2 = Fuzzy::where('id', '2')->first();
        $popularity3 = Fuzzy::where('id', '3')->first();

        $cost1 = Fuzzy::where('id', '4')->first();
        $cost2 = Fuzzy::where('id', '5')->first();
        $cost3 = Fuzzy::where('id', '6')->first();

        $visitor1 = Fuzzy::where('id', '7')->first();
        $visitor2 = Fuzzy::where('id', '8')->first();
        $visitor3 = Fuzzy::where('id', '9')->first();

        $facility1 = Fuzzy::where('id', '10')->first();
        $facility2 = Fuzzy::where('id', '11')->first();
        $facility3 = Fuzzy::where('id', '12')->first();

        $cleanliness1 = Fuzzy::where('id', '13')->first();
        $cleanliness2 = Fuzzy::where('id', '14')->first();
        $cleanliness3 = Fuzzy::where('id', '15')->first();

        $accessibility1 = Fuzzy::where('id', '16')->first();
        $accessibility2 = Fuzzy::where('id', '17')->first();
        $accessibility3 = Fuzzy::where('id', '18')->first();

        return view('dashboard.fuzzy.index', [
            'popularity1' => $popularity1,
            'popularity2' => $popularity2,
            'popularity3' => $popularity3,

            'cost1' => $cost1,
            'cost2' => $cost2,
            'cost3' => $cost3,

            'visitor1' => $visitor1,
            'visitor2' => $visitor2,
            'visitor3' => $visitor3,

            'facility1' => $facility1,
            'facility2' => $facility2,
            'facility3' => $facility3,

            'cleanliness1' => $cleanliness1,
            'cleanliness2' => $cleanliness2,
            'cleanliness3' => $cleanliness3,

            'accessibility1' => $accessibility1,
            'accessibility2' => $accessibility2,
            'accessibility3' => $accessibility3
        ]);
    }

    public function edit()
    {
        $popularity1 = Fuzzy::where('id', '1')->first();
        $popularity2 = Fuzzy::where('id', '2')->first();
        $popularity3 = Fuzzy::where('id', '3')->first();

        $cost1 = Fuzzy::where('id', '4')->first();
        $cost2 = Fuzzy::where('id', '5')->first();
        $cost3 = Fuzzy::where('id', '6')->first();

        $visitor1 = Fuzzy::where('id', '7')->first();
        $visitor2 = Fuzzy::where('id', '8')->first();
        $visitor3 = Fuzzy::where('id', '9')->first();

        $facility1 = Fuzzy::where('id', '10')->first();
        $facility2 = Fuzzy::where('id', '11')->first();
        $facility3 = Fuzzy::where('id', '12')->first();

        $cleanliness1 = Fuzzy::where('id', '13')->first();
        $cleanliness2 = Fuzzy::where('id', '14')->first();
        $cleanliness3 = Fuzzy::where('id', '15')->first();

        $accessibility1 = Fuzzy::where('id', '16')->first();
        $accessibility2 = Fuzzy::where('id', '17')->first();
        $accessibility3 = Fuzzy::where('id', '18')->first();

        return view('dashboard.fuzzy.edit', [
            'popularity1' => $popularity1,
            'popularity2' => $popularity2,
            'popularity3' => $popularity3,

            'cost1' => $cost1,
            'cost2' => $cost2,
            'cost3' => $cost3,

            'visitor1' => $visitor1,
            'visitor2' => $visitor2,
            'visitor3' => $visitor3,

            'facility1' => $facility1,
            'facility2' => $facility2,
            'facility3' => $facility3,

            'cleanliness1' => $cleanliness1,
            'cleanliness2' => $cleanliness2,
            'cleanliness3' => $cleanliness3,

            'accessibility1' => $accessibility1,
            'accessibility2' => $accessibility2,
            'accessibility3' => $accessibility3
        ]);
    }

    public function update(Request $request)
    {
        $url = $request->path();

        Fuzzy::find(1)->update([
            'min_set' => $request->popularityMin1,
            'max_set' => $request->popularityMax1
        ]);

        Fuzzy::find(2)->update([
            'min_set' => $request->popularityMin2,
            'max_set' => $request->popularityMax2
        ]);

        Fuzzy::find(3)->update([
            'min_set' => $request->popularityMin3,
            'max_set' => $request->popularityMax3
        ]);

        Fuzzy::find(4)->update([
            'min_set' => $request->costMin1,
            'max_set' => $request->costMax1
        ]);

        Fuzzy::find(5)->update([
            'min_set' => $request->costMin2,
            'max_set' => $request->costMax2
        ]);

        Fuzzy::find(6)->update([
            'min_set' => $request->costMin3,
            'max_set' => $request->costMax3
        ]);

        Fuzzy::find(7)->update([
            'min_set' => $request->visitorMin1,
            'max_set' => $request->visitorMax1
        ]);

        Fuzzy::find(8)->update([
            'min_set' => $request->visitorMin2,
            'max_set' => $request->visitorMax2
        ]);

        Fuzzy::find(9)->update([
            'min_set' => $request->visitorMin3,
            'max_set' => $request->visitorMax3
        ]);

        Fuzzy::find(10)->update([
            'min_set' => $request->facilityMin1,
            'max_set' => $request->facilityMax1
        ]);

        Fuzzy::find(11)->update([
            'min_set' => $request->facilityMin2,
            'max_set' => $request->facilityMax2
        ]);

        Fuzzy::find(12)->update([
            'min_set' => $request->facilityMin3,
            'max_set' => $request->facilityMax3
        ]);

        Fuzzy::find(13)->update([
            'min_set' => $request->cleanlinessMin1,
            'max_set' => $request->cleanlinessMax1
        ]);

        Fuzzy::find(14)->update([
            'min_set' => $request->cleanlinessMin2,
            'max_set' => $request->cleanlinessMax2
        ]);

        Fuzzy::find(15)->update([
            'min_set' => $request->cleanlinessMin3,
            'max_set' => $request->cleanlinessMax3
        ]);

        Fuzzy::find(16)->update([
            'min_set' => $request->accessibilityMin1,
            'max_set' => $request->accessibilityMax1
        ]);

        Fuzzy::find(17)->update([
            'min_set' => $request->accessibilityMin2,
            'max_set' => $request->accessibilityMax2
        ]);

        Fuzzy::find(18)->update([
            'min_set' => $request->accessibilityMin3,
            'max_set' => $request->accessibilityMax3
        ]);

        return redirect($url); 
    }
}
