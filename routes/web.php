<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [ClientController::class, 'viewhomepage']);
Route::get('/about', [ClientController::class, 'viewaboutpage']);
Route::get('/faq', [ClientController::class, 'viewfaqpage']);
Route::get('/contact', [ClientController::class, 'viewcontactpage']);
Route::get('/login', [ClientController::class, 'viewloginpage']);
Route::get('/register', [ClientController::class, 'viewregisterpage']);
Route::get('/cart', [ClientController::class, 'viewcartpage']);
Route::get('/checkout', [ClientController::class, 'viewcheckoutpage']);
Route::get('/dashboard', [ClientController::class, 'viewdashboardpage']);
Route::get('/profile', [ClientController::class, 'viewprofilepage']);
Route::get('/billingdetails', [ClientController::class, 'viewbillingdetailspage']);
Route::get('/loginpassword', [ClientController::class, 'viewloginpasswordpage']);
Route::get('/customerorders', [ClientController::class, 'vieworderspage']);
Route::get('/productbycategory', [ClientController::class, 'viewproductbycategorypage']);
Route::get('/productdetails', [ClientController::class, 'viewproductdetailspage']);
Route::get('/searchproduct', [ClientController::class, 'viewsearchproductpage']);
