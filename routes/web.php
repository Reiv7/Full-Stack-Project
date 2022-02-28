<?php

use App\Models\Category;
use GuzzleHttp\Psr7\Uri;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SocialController;
use App\Http\Controllers\main\CartController;
use App\Http\Controllers\main\MainController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;


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

// Route::get('/dashboard', function () {
//     $role = config('roles.models.role')::where('name', '=', 'moderator')->first();  //choose the default role upon user creation.
//         auth()->user()->attachRole($role);
//         return view('welcome');
// })->middleware(['auth'])->name('dashboard');

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[MainController::class , 'index']);

Route::get('category', [MainController::class , 'category']);

Route::get('category/{subcategories}',[MainController::class , 'viewcategory']);

Route::get('category/{cate_subcategories}/{prod_subcategories}', [MainController::class,'productview']);

Route::post('delete-cart', [CartController::class , 'deletecart']);

Route::get('load-cart-data' , [CartController::class , 'cartcount']);

Route::get('product-list' , [MainController::class , 'productlist']);

Route::post('searchproduct' , [MainController::class , 'searchProduct']);

Route::middleware('auth')->group(function () {

Route::get('cart', [CartController::class, 'viewcart']);

Route::post('add-to-cart', [CartController::class , 'addProduct']);
});




Auth::routes(['verify' => true]);


Route::middleware(['auth','isAdmin'])->group( function () {

    Route::get('/dashboard','Admin\FrontendController@index');

    Route::get('categories','Admin\CategoryController@index');

    Route::get('add-category','Admin\CategoryController@add');

    Route::post('insert-category','Admin\CategoryController@insert');

    Route::get('edit-cate/{id}', [CategoryController::class , 'edit']);

    Route::put('update-category/{id}', [CategoryController::class , 'update']);

    Route::get('delete-cate/{id}', [CategoryController::class , 'destroy']);

    Route::get('products',[ ProductController::class , 'index']);

    Route::get('add-product',[ ProductController::class , 'add']);

    Route::post('insert-product', [ProductController::class ,'insert']);

    Route::get('edit-product/{id}', [ProductController::class , 'edit']);

    Route::put('update-product/{id}', [ProductController::class , 'update']);

    Route::get('delete-product/{id}', [ProductController::class , 'destroy']);

    Route::get('users' , [DashboardController::class , 'users']);

    Route::get('adds-user' , [DashboardController::class , 'addsuser']);

    Route::post('add-user' , [DashboardController::class , 'adduser']);

    Route::get('show-user/{id}' , [DashboardController::class , 'showuser']);

    Route::get('edit-user/{id}' , [DashboardController::class , 'edituser']);

    Route::put('update-user/{id}' , [DashboardController::class , 'updateuser']);

    Route::get('delete-user/{id}' , [DashboardController::class , 'deleteuser']);








});

// Email Verification
Route::get('/email/verify', function () {
    return view('auth.verify');
})->middleware('auth')->name('verification.notice');


Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/')->with('status','Email verified');

    // return view('welcome');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::get('/profile', function () {
    // Only verified users may access this route...
})->middleware('verified');

//-----------



//----------------------------------
Route::get('/redirect/{service}', [SocialController::class,'redirect']);
Route::get('/callback/{service}', [SocialController::class,'callback']);
//Google login
Route::get('login/google/', [App\Http\Controllers\Auth\LoginController::class,'redirectToGoogle'])->name('login.google');
Route::get('login/google/callback', [App\Http\Controllers\Auth\LoginController::class,'handleGoogleCallback']);

//Facebook login
Route::get('login/facebook/', [App\Http\Controllers\Auth\LoginController::class,'redirectToFacebook'])->name('login.facebook');
Route::get('login/facebook/callback', [App\Http\Controllers\Auth\LoginController::class,'handleFacebookCallback']);

//Github login
Route::get('login/github/', [App\Http\Controllers\Auth\LoginController::class,'redirectToGithub'])->name('login.github');
Route::get('login/github/callback', [App\Http\Controllers\Auth\LoginController::class,'handleGithubCallback']);




Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profile', [App\Http\Controllers\HomeController::class, 'userProfile'])->name('profile');
Route::post('/profile', [App\Http\Controllers\HomeController::class, 'updateInfo'])->name('update-profile');
Route::post('/profile/1', [App\Http\Controllers\HomeController::class, 'updateImg'])->name('update-img');




