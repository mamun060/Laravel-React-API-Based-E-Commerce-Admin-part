<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\VisitorListController;
use App\Http\Controllers\ContactListController;
use App\Http\Controllers\SiteInfoController;
use App\Http\Controllers\CategoryDetailsController;
use App\Http\Controllers\ProductListController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\ProductDetailsController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// front end React ecommecer all API list below 
Route::get('/SendVisitorDetails', [VisitorListController::class,'GetVisitorDetails']);
Route::post('/SendContactDetails', [ContactListController::class, 'SendContactDetails']);
Route::get('/SendSiteInfo', [SiteInfoController::class, 'SendSiteInfo']);


Route::get('/SendCategoryDetails', [CategoryDetailsController::class, 'SendCategoryDetails']);
Route::get('/ProductListByRemark/{remark}', [ProductListController::class, 'ProductListByRemark']);

Route::get('/ProductListByCategory/{category}', [ProductListController::class, 'ProductListByCategory']);
Route::get('/ProductListBySubCategory/{category}/{subcategory}', [ProductListController::class, 'ProductListByCategory']);

Route::get('/SendSliderInfo', [SliderController::class, 'SendSliderInfo']);

Route::get('/ProductDetails/{code}', [ProductDetailsController::class,'ProductDetails']);
