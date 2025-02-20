<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SimpleController;
use App\Http\Controllers\ApiController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/data',[SimpleController::class,'index']);

/***
 * 
 * Fetch first 10 products (default)
 * GET /api/bigcommerce/products
 * 
 * 
 * Fetch 5 products starting from the 10th product
 * GET /api/bigcommerce/products?limit=5&offset=10
 * 
 * Fetch 20 products starting from the 50th product
 * GET /api/bigcommerce/products?limit=20&offset=50
 * 
 */
Route::get('/bigcommerce/products', [ApiController::class, 'getProducts']);