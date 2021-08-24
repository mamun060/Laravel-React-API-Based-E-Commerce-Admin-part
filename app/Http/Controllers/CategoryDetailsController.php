<?php

namespace App\Http\Controllers;
use App\Models\CategoryLavel1Model;
use App\Models\CategoryLavel2Model;

use Illuminate\Http\Request;

class CategoryDetailsController extends Controller
{
    public function SendCategoryDetails(){
        $ParentCategory = CategoryLavel1Model::all();
        $CategoryDetailsArray = [];

        foreach( $ParentCategory as $value ){
            $SubCategory = CategoryLavel2Model::where('cat1_name', $value['cat1_name'])->get();
            $item =  [
                'ParentCategoryName'=>$value['cat1_name'],
                'ParentCategoryImg'=>$value['cat1_image'],
                'SubCategory'=>$SubCategory
            ];
            array_push($CategoryDetailsArray, $item);
        }
        
        return $CategoryDetailsArray;
    }
}
