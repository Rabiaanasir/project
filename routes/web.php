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
use App\Http\Controllers\nmController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\calculatorController;
use App\Http\Controllers\packagesController;
use App\Http\Controllers\emiController;
use App\Http\Controllers\investController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ListingController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\admin\ProjectController;
use App\Http\Controllers\ApplianceController;
use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\BlogPostController;
use App\Http\Controllers\admin\PackageController;
use App\Http\Controllers\admin\ContactsController;
use App\Http\Controllers\admin\FeedbackController;


Route::get('/', [homeController::class, 'index'])->name('home');
Route::get('/about', [aboutController::class, 'index'])->name('about');
Route::get('/panels', [panelsController::class, 'index'])->name('panels');
Route::get('/inverters', [invertersController::class, 'index'])->name('inverters');
Route::get('/batteries', [batteriesController::class, 'index'])->name('batteries');
Route::get('/heaters', [heatersController::class, 'index'])->name('heaters');
Route::get('/agriculture', [agriController::class, 'index'])->name('agriculture');
Route::get('/commercial', [commercialController::class, 'index'])->name('commercial');
Route::get('/blog', [BlogPostController::class, 'frontendBlogPosts'])->name('blog');
Route::get('/financing', [financeController::class, 'index'])->name('financing');
Route::get('/contact', [ContactsController::class, 'index'])->name('contact');
Route::post('/contact', [ContactsController::class, 'store'])->name('contact.store');
Route::get('/calculator', [calculatorController::class, 'index'])->name('calculator');
Route::get('/net-metering', [nmController::class, 'index'])->name('net-metering');
Route::get('/emi', [emiController::class, 'index'])->name('emi');
Route::get('/invest', [investController::class, 'index'])->name('invest');
Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');


// Show the combined login/register page
Route::get('/login', [AuthController::class, 'showRegForm'])->name('login');
Route::get('/register', [AuthController::class, 'showRegForm'])->name('registeration');


// Handle login submission
Route::post('/loginpost', [AuthController::class, 'login'])->name('login.submit');

// Handle registration submission
Route::post('/register', [AuthController::class, 'register'])->name('register.submit');

// Logout
Route::any('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes for authenticated users and admins
Route::middleware('auth')->group(function () {
    Route::get('/user', function () {
        return view('frontend.user');
    })->name('user');

});
Route::get('/appliances', [ApplianceController::class, 'index'])->name('appliances.index');
Route::post('/appliances', [ApplianceController::class, 'store'])->middleware('auth')->name('appliances.store');
Route::any('/appliances/calculateSystemRequirements', [ApplianceController::class, 'calculateSystemRequirements'])->name('appliances.calculateSystemRequirements');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard');
    Route::get('/admin-profile', [AuthController::class, 'index'])->name('admin.profile');
    Route::get('/dashboard',[AdminController::class,'index'])->name('admin.dashboard');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/show/{id}', [UserController::class, 'show'])->name('users.show');
    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('users.destroy');


    Route::any('/brands', [BrandController::class, 'index'])->name('brands.index');
Route::post('/brands/store', [BrandController::class, 'store'])->name('brands.store');
Route::get('/brands/edit/{id}', [BrandController::class, 'edit'])->name('brands.edit');
Route::put('/brands/update/{id}/', [BrandController::class, 'update'])->name('brands.update');
Route::delete('/brands/{id}', [BrandController::class, 'destroy'])->name('brands.destroy');

    Route::get('listings', [ListingController::class, 'index'])->name('listings.index');
    Route::get('listings/view/{id}', [ListingController::class, 'view'])->name('listings.view');
    Route::get('listings/create', [ListingController::class, 'create'])->name('listings.create');
Route::post('listings/store', [ListingController::class, 'store'])->name('listings.store');
Route::get('listings/edit/{id}', [ListingController::class, 'edit'])->name('listings.edit');
Route::put('/listings/update/{id}', [ListingController::class, 'update'])->name('listings.update');
Route::delete('listings/delete/{id}', [ListingController::class, 'destroy'])->name('listings.destroy');

Route::get('/bookings', [BookingController::class, 'adminIndex'])->name('admin.bookings.index');
Route::get('/bookings/data', [BookingController::class, 'getData'])->name('admin.bookings.data');
Route::post('/bookings/store', [BookingController::class, 'store'])->name('admin.bookings.store');
Route::post('/bookings/{id}/update-date', [BookingController::class, 'updateBookingDate'])->name('admin.bookings.updateDate');

Route::post('/bookings/{id}/update-status', [BookingController::class, 'updateStatus'])->name('admin.bookings.updateStatus');
Route::delete('/bookings/delete/{id}', [BookingController::class, 'destroy'])->name('bookings.destroy');
Route::post('/bookings/{id}/send-email', [BookingController::class, 'sendEmail'])->name('admin.bookings.sendEmail');



Route::get('projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('projects/store', [ProjectController::class, 'store'])->name('projects.store');
Route::get('projects/edit/{id}', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('projects/update/{id}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('projects/delete/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::get('/appliances', [ApplianceController::class, 'show'])->name('admin.appliances');
Route::get('/appliances/data', [ApplianceController::class, 'getAppliancesData'])->name('appliances.data');
Route::delete('appliances/delete/{id}', [ApplianceController::class, 'destroy'])->name('appliances.destroy');


Route::get('posts', [BlogPostController::class, 'index'])->name('posts.index');
Route::get('posts/view/{id}', [BlogPostController::class, 'view'])->name('posts.view');
Route::get('posts/create', [BlogPostController::class, 'create'])->name('posts.create');
Route::post('posts/store', [BlogPostController::class, 'store'])->name('posts.store');
Route::get('posts/edit/{id}', [BlogPostController::class, 'edit'])->name('posts.edit');
Route::put('posts/update/{id}', [BlogPostController::class, 'update'])->name('posts.update');
Route::delete('posts/delete/{id}', [BlogPostController::class, 'destroy'])->name('posts.destroy');

Route::get('packages', [PackageController::class, 'index'])->name('packages.index');
Route::get('packages/view/{id}', [PackageController::class, 'view'])->name('packages.view');
Route::get('packages/create', [PackageController::class, 'create'])->name('packages.create');
Route::post('packages/store', [PackageController::class, 'store'])->name('packages.store');
Route::get('packages/edit/{id}', [PackageController::class, 'edit'])->name('packages.edit');
Route::put('packages/update/{id}', [PackageController::class, 'update'])->name('packages.update');
Route::delete('packages/delete/{id}', [PackageController::class, 'destroy'])->name('packages.destroy');

Route::get('/contact/index', [ContactsController::class, 'AdminIndex'])->name('contact.index');
Route::get('/admin/contact', [ContactsController::class, 'index'])->name('admin.contact');
Route::delete('/contact/{id}', [ContactsController::class, 'destroy'])->name('admin.contact.destroy');
Route::get('/admin/contact/{id}', [ContactsController::class, 'show'])->name('admin.contact.show');

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::get('/feedback/data', [FeedbackController::class, 'getData'])->name('feedback.data');
Route::get('/feedback/view/{id}', [FeedbackController::class, 'show'])->name('feedback.show');
Route::delete('feedback/delete/{id}', [FeedbackController::class, 'destroy'])->name('feedback.destroy');
});

Route::get('/listings', [ListingController::class, 'showUserListings'])->name('frontend.listings');
Route::get('/listings-data', [ListingController::class, 'getUserListings'])->name('frontend.listings.data');
Route::get('/product/{id}', [ListingController::class, 'show'])->name('product.show');

Route::get('/projects', [ProjectController::class, 'frontendProjects'])->name('frontend.projects');
Route::get('/packages', [PackageController::class, 'frontendpackages'])->name('packages');


Route::get('/bookings/create', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');
Route::get('/bookings/index', [BookingController::class, 'index'])->name('bookings.index');

Route::get('/send-test-email', [ContactsController::class, 'sendTestEmail']);
Route::get('/send-emails-to-all-users', [ContactsController::class, 'sendEmailsToAllUsers']);


Route::middleware('auth')->group(function () {
    Route::get('/user/profile', [AuthController::class, 'showProfile'])->name('user.profile');
    Route::post('/user/profile', [AuthController::class, 'updateProfile'])->name('user.profile.update');
});
