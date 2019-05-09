<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Hit;
use App\Models\Fuzzy;
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

    


    public function calculate(Request $request)
    {

        // Ambil nilai inputan checklist kategori
        foreach ($request->category as $selected) {
            $categorySelected[] = $selected;
        }

        // Mencari semua destinasi berdasarkan inputan checklist kategori yg dipilih
        for ($i=0; $i < count($categorySelected); $i++) { 
            $categoryToDestinations[] = Destination::where('category_id', $categorySelected[$i])->get();
        }

        // Semua destinasi yg didapat berdasarkan kategori diambil id-nya
        foreach($categoryToDestinations as $collection) {
            foreach($collection as $item) {
                $idCategorySelected[] = $item->id;
            }
        }



        // =================================== PERHITUNGAN POPULARITAS ========================================

        // Ambil nilai popularitas dari masing-masing destinasi
        foreach($idCategorySelected as $colection) {
            $getPopularityValue[] = Destination::where('id', $colection)->first()->popularity;
        }

        // Ambil nilai batas atas dan batas bawah popularitas (Himpunan Cukup Terkenal)
        $popularityMin1 = Fuzzy::where('id', '1')->first()->min_set;
        $popularityMax1 = Fuzzy::where('id', '1')->first()->max_set;

        // Ambil nilai batas atas dan batas bawah popularitas (Himpunan Terkenal)
        $popularityMin2 = Fuzzy::where('id', '2')->first()->min_set;
        $popularityMax2 = Fuzzy::where('id', '2')->first()->max_set;

        // Ambil nilai batas atas dan batas bawah popularitas (Himpunan Sangat Terkenal)
        $popularityMin3 = Fuzzy::where('id', '3')->first()->min_set;
        $popularityMax3 = Fuzzy::where('id', '3')->first()->max_set;

        // 
        for ($i=0; $i < count($idCategorySelected); $i++) {
            //
            if ($getPopularityValue[$i] <= $popularityMin1) {
                $cukupTerkenal[] = 1;
            }
            else if ($getPopularityValue[$i] >= $popularityMin1 && $getPopularityValue[$i] <= $popularityMax1) {
                $cukupTerkenal[] = ($popularityMax1 - $getPopularityValue[$i])/($popularityMax1 - $popularityMin1);
            }
            else if ($getPopularityValue[$i] >= $popularityMax1) {
                $cukupTerkenal[] = 0;
            }

            //
            if ($getPopularityValue[$i] <= $popularityMin2 || $getPopularityValue[$i] >= $popularityMax2) {
                $terkenal[] = 0;
            }
            else if ($getPopularityValue[$i] >= $popularityMin2 && $getPopularityValue[$i] <= ($popularityMax2 - 0.4)) {
                $terkenal[] = ($getPopularityValue[$i] - $popularityMin2)/(($popularityMax2 - 0.4) - $popularityMin2);
            }
            else if ($getPopularityValue[$i] >= ($popularityMax2 - 0.4) && $getPopularityValue[$i] <= $popularityMax2) {
                $terkenal[] = ($popularityMax2 - $getPopularityValue[$i])/($popularityMax2 - ($popularityMax2 - 0.4));
            }

            //
            if ($getPopularityValue[$i] <= $popularityMin3) {
                $sangatTerkenal[] = 0;
            }
            else if ($getPopularityValue[$i] >= $popularityMin3 && $getPopularityValue[$i] <= $popularityMax3) {
                $sangatTerkenal[] = ($getPopularityValue[$i] - $popularityMin3)/($popularityMax3 - $popularityMin3);
            }
            else if ($getPopularityValue[$i] >= $popularityMax3) {
                $sangatTerkenal[] = 1;
            }
        }
        
        // =================================== AKHIR PERHITUNGAN POPULARITAS ========================================



        // =================================== PERHITUNGAN BIAYA MASUK ========================================

        // Ambil nilai biaya masuk dari masing-masing destinasi
        foreach($idCategorySelected as $colection) {
            $getCostValue[] = Destination::where('id', $colection)->first()->cost;
        }

        // Ambil nilai batas atas dan batas bawah biaya masuk (Himpunan Sangat Murah)
        $costMin1 = Fuzzy::where('id', '4')->first()->min_set;
        $costMax1 = Fuzzy::where('id', '4')->first()->max_set;

        // Ambil nilai batas atas dan batas bawah biaya masuk (Himpunan Murah)
        $costMin2 = Fuzzy::where('id', '5')->first()->min_set;
        $costMax2 = Fuzzy::where('id', '5')->first()->max_set;

        // Ambil nilai batas atas dan batas bawah biaya masuk (Himpunan Sedang)
        $costMin3 = Fuzzy::where('id', '6')->first()->min_set;
        $costMax3 = Fuzzy::where('id', '6')->first()->max_set;

        // 
        for ($i=0; $i < count($idCategorySelected); $i++) {
            //
            if ($getCostValue[$i] <= $costMin1) {
                $sangatMurah[] = 1;
            }
            else if ($getCostValue[$i] >= $costMin1 && $getCostValue[$i] <= $costMax1) {
                $sangatMurah[] = ($costMax1 - $getCostValue[$i])/($costMax1 - $costMin1);
            }
            else if ($getCostValue[$i] >= $costMax1) {
                $sangatMurah[] = 0;
            }

            //
            if ($getCostValue[$i] <= $costMin2 || $getCostValue[$i] >= $costMax2) {
                $murah[] = 0;
            }
            else if ($getCostValue[$i] >= $costMin2 && $getCostValue[$i] <= ($costMax2 - 10000)) {
                $murah[] = ($getCostValue[$i] - $costMin2)/(($costMax2 - 10000) - $costMin2);
            }
            else if ($getCostValue[$i] >= ($costMax2 - 10000) && $getCostValue[$i] <= $costMax2) {
                $murah[] = ($costMax2 - $getCostValue[$i])/($costMax2 - ($costMax2 - 10000));
            }

            //
            if ($getCostValue[$i] <= $costMin3) {
                $sedang[] = 0;
            }
            else if ($getCostValue[$i] >= $costMin3 && $getCostValue[$i] <= $costMax3) {
                $sedang[] = ($getCostValue[$i] - $costMin3)/($costMax3 - $costMin3);
            }
            else if ($getCostValue[$i] >= $costMax3) {
                $sedang[] = 1;
            }
        }
        
        // =================================== AKHIR PERHITUNGAN BIAYA MASUK ========================================
        

        // Cari tahu popularitas destinasi pilihan user
        if ($request->popularity == "cukup_terkenal") {
            $popularityReq = $cukupTerkenal;
        }
        else if ($request->popularity == "terkenal") {
            $popularityReq = $terkenal;
        }
        else if ($request->popularity == "sangat_terkenal") {
            $popularityReq = $sangatTerkenal;
        }


        // Cari tahu biaya masuk destinasi pilihan user
        if ($request->cost == "sangat_murah") {
            $costReq = $sangatMurah;
        }
        else if ($request->cost == "murah") {
            $costReq = $murah;
        }
        else if ($request->cost == "sedang") {
            $costReq = $sedang;
        }


        // Menjadikan array
        for ($i=0; $i < count($idCategorySelected); $i++) { 
            $calculationArray[] = [
                'id' => $idCategorySelected[$i],
                'popularity' => $popularityReq[$i],
                'cost' => $costReq[$i]
            ];
        }

        // Hitung nilai minimum antara popularity dan cost
        for ($i=0; $i < count($idCategorySelected); $i++) {
            $minCalculation[] = min($calculationArray[$i]['popularity'], $calculationArray[$i]['cost']);

            $finalCalculation[] = [
                'id' => $idCategorySelected[$i],
                'calculation' => $minCalculation[$i]
            ];
        }

        // Sorting array berdasarkan value
        usort($finalCalculation, function($a, $b) {
            return $b['calculation'] <=> $a['calculation'];
        });


        // Hapus array dengan value calculation = 0
        $counter = 0;
        foreach($finalCalculation as $key => $value){
            if ($value['calculation'] == 0) {
                unset($finalCalculation[$counter]);
            }
            $counter++;
        }
    
        $finalResult = [];
        for ($i=0; $i < count($finalCalculation); $i++) { 
            $finalResult[] = Destination::where('id', $finalCalculation[$i]['id'])->first();
        }


        if (!$finalResult) {
            return view('frontend.noresult');
        }
        else {
            return view('frontend.result', ['destinations' => $finalResult]);
        }

        // dd($finalResult);

    }

}
