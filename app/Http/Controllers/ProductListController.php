<?php

namespace App\Http\Controllers;
use App\Models\ProductListModel;

use Illuminate\Http\Request;

class ProductListController extends Controller
{
   public function ProductListByRemark( Request $request){
       $remark = $request->remark;
       $ProductList = ProductListModel::Where('remark', $remark)->get();
       return $ProductList;
   }

   public function ProductListByCategory(Request $request){
    $category = $request->category;
    $ProductList = ProductListModel::Where('category', $category)->get();
    return $ProductList;
    }

   public function ProductListBySubCategory(Request $request){
       $category = $request->category;
       $SubCategory = $request->subcategory;
       $ProductList = ProductListModel::Where('category', $category)->Where('subcategory',)->get();
    return $ProductList;
   }

}
