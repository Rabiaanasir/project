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
use App\Http\Controllers\AuthController;
use App\Http\Controllers\InstallController;
use App\Http\Controllers\profileController;

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


// Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');


// // Authentication routes
// Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
// Route::post('/login', [AuthController::class, 'login']);
// Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Routes protected by 'auth' middleware for logged-in users
// Route::middleware('auth')->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard'); 
//     })->name('dashboard');
// });

// // Routes protected by 'admin' middleware for admin users only
// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/admin/dashboard', function () {
//         return view('admin.dashboard'); // Admin dashboard
//     })->name('admin.dashboard');
// });


// // Show the combined login/register page
// Route::get('/login', [AuthController::class, 'showRegForm'])->name('login');
// Route::get('/register', [AuthController::class, 'showRegForm'])->name('registeration');

// // Handle login submission
// Route::post('/login', [AuthController::class, 'login']);

// // Handle registration submission
// Route::post('/register', [AuthController::class, 'register']);

// // Logout
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// // Routes for authenticated users and admins
// Route::middleware('auth')->group(function () {
//     Route::get('/user', function () {
//         return view('frontend.user');
//     })->name('user');
// });

// Route::middleware(['auth', 'admin'])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('Admin.dashboard');
//     })->name('Admin.dashboard');
// });


// Route for the install system page (for authenticated users)
Route::middleware('auth')->group(function () {
    
});


// Show the combined login/register page
Route::get('/login', [AuthController::class, 'showRegForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegForm'])->name('registeration');


// Handle login submission
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

// Handle registration submission
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Logout
Route::any('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes for authenticated users and admins
Route::middleware('auth')->group(function () {
    Route::get('/user', function () {
        return view('frontend.user');
    })->name('user');
    Route::get('/install-system', [InstallController::class, 'index'])->name('installSystem');
});

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/dashboard', function () {
        return view('Admin.dashboard');
    })->name('Admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [AuthController::class, 'showProfile'])->name('user.profile');
    Route::post('/user/profile', [AuthController::class, 'updateProfile'])->name('user.profile.update');
});
