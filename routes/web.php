<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Models\Tag;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/redirect',[HomeController::class,'redirect']);

// //tags
// ROute::POST('/redirect',function(){
//     $tag = new Tag();
//     $tag ->details = request('details');
//     $tag ->product_id = request('product_id');
//     $tag->save();
//     return redirect('/redirect');
// });

// //category
// Route::POST('/redirect',[HomeController::class,'storecategory']);

// //product
// Route::POST('/redirect',[HomeController::class,'storeproduct']);

//tags
Route::GET('/tag',[HomeController::class,'tag']);
ROute::POST('/tag',function(){
    $tag = new Tag();
    $tag ->details = request('details');
    $tag ->product_id = request('product_id');
    $tag->save();
    return view('admin.home');
});

//category
Route::GET('/category',[HomeController::class,'category']);
Route::POST('/category',[HomeController::class,'storecategory']);

//Product
Route::GET('/product',[HomeController::class,'product']);
Route::POST('/product',[HomeController::class,'storeproduct']);

//show tags by product
Route::GET('{id}',[HomeController::class,'showTag']);

//add comment
Route::GET('add/{id}',[HomeController::class,'addcomment']);
Route::POST('add/{id}',[HomeController::class,'updateData']);
