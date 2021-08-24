<?php

namespace App\Http\Controllers;
use App\Models\SliderModel;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function SendSliderInfo(){
        $result = SliderModel::all();

        return $result;
    }
}
