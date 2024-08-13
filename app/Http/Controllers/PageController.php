<?php

namespace App\Http\Controllers;

use App\Models\AboutContent;
use App\Models\CaseContent;
use App\Models\FeatureContent;
use App\Models\HomeContent;
use App\Models\PriceContent;
use App\Models\User;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        $dataHome = HomeContent::all();
        $dataAboutAtas = AboutContent::where('position', 'atas')->get();
        $dataAboutKonten = AboutContent::where('position', 'konten')->get();
        $dataAboutBawah = AboutContent::where('position', 'bawah')->get();
        $dataCase = CaseContent::all();
        $dataFeature = FeatureContent::all();
        $dataPrice = PriceContent::all();

        $data = [
            'dataHome'          => $dataHome,
            'dataAboutAtas'     => $dataAboutAtas,
            'dataAboutKonten'   => $dataAboutKonten,
            'dataAboutBawah'    => $dataAboutBawah,
            'dataCase'          => $dataCase,
            'dataFeature'       => $dataFeature,
            'dataPrice'         => $dataPrice,
        ];

        return view('home', $data);
    }
}
