<?php

namespace App\Http\Controllers;

use App\Models\CitiesModel;
use App\Models\ForecastsModel;

class ForecastController extends Controller
{
    public function index(CitiesModel $city)
    {

        $prognoze = ForecastsModel::where(['city_id' => $city->id])->get();

        return view('forecasts', compact('prognoze'));

    }
}
