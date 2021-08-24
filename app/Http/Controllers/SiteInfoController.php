<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\SiteInfoModel;


class SiteInfoController extends Controller
{
    public function SendSiteInfo(){
        $result = SiteInfoModel::all();

        return $result;
    }
}
