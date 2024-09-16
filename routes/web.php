<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\aboutController;
use App\Http\Controllers\panelsController;
use App\Http\Controllers\invertersController;
use App\Http\Controllers\batteriesController;
use App\Http\Controllers\heatersController;
use App\Http\Controllers\agriController;
use App\Http\Controllers\commercialController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\financeController;
use App\Http\Controllers\projectsController;
use App\Http\Controllers\nmController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\calculatorController;
use App\Http\Controllers\packagesController;
use App\Http\Controllers\emiController;
use App\Http\Controllers\investController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\RegController;

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

Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/about', [aboutController::class, 'index'])->name('about');
Route::get('/panels', [panelsController::class, 'index'])->name('panels');
Route::get('/inverters', [invertersController::class, 'index'])->name('inverters');
Route::get('/batteries', [batteriesController::class, 'index'])->name('batteries');
Route::get('/heaters', [heatersController::class, 'index'])->name('heaters');
Route::get('/agriculture', [agriController::class, 'index'])->name('agriculture');
Route::get('/commercial', [commercialController::class, 'index'])->name('commercial');
Route::get('/blog', [blogController::class, 'index'])->name('blog');
Route::get('/projects', [projectsController::class, 'index'])->name('projects');
Route::get('/financing', [financeController::class, 'index'])->name('financing');
Route::get('/contact-us', [contactController::class, 'index'])->name('contact-us');
Route::get('/calculator', [calculatorController::class, 'index'])->name('calculator');
Route::get('/packages', [packagesController::class, 'index'])->name('packages');
Route::get('/net-metering', [nmController::class, 'index'])->name('net-metering');
Route::get('/emi', [emiController::class, 'index'])->name('emi');
Route::get('/invest', [investController::class, 'index'])->name('invest');
Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
Route::get('/register', [RegController::class, 'index'])->name('registeration');