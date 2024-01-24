<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\HomeController;
use App\Enums\HttpStatusCodesEnum;
use App\Helpers\HttpResponses;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
*/
Route::any('/', [HomeController::class,'welcome']);
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['namespace' => 'Api', 'prefix' => 'v1'], function () {
    Route::any('/', [HomeController::class,'index'])->middleware('throttle:1,0.033');
});

# Def
Route::fallback(action: function () {
    return HttpResponses::error(null,null,HttpStatusCodesEnum::NotFound,HttpStatusCodesEnum::NotFound);
});