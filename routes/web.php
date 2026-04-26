<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\BookController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\SettingsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LeadController as AdminLeadController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\ActivityLogController;
use App\Http\Controllers\LeadController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Routes for public pages and admin panel management.
|
*/

// Public Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [\App\Http\Controllers\Public\PageController::class, 'about'])->name('about');
Route::get('/contact', [\App\Http\Controllers\Public\PageController::class, 'contact'])->name('contact');
Route::post('/contact/submit', [\App\Http\Controllers\Public\PageController::class, 'submitContact'])->name('contact.submit');
Route::post('/subscribe', [\App\Http\Controllers\NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// Lead Capture Routes
Route::get('/evolve', [LeadController::class, 'evolve'])->name('evolve');
Route::get('/lead-form', [LeadController::class, 'showForm'])->name('lead.form');
Route::post('/lead-submit', [LeadController::class, 'submitForm'])->name('lead.submit');

// DEV-ONLY: Reset lead gate cookies to simulate a fresh user
// Automatically returns 404 in production (guarded inside the controller)
Route::get('/lead-reset', [LeadController::class, 'resetGate'])->name('lead.reset');

// Catalog / Portfolio (gated behind lead capture)
Route::get('/catalog', [\App\Http\Controllers\Public\BookController::class, 'index'])->middleware('lead.captured')->name('catalog.index');
Route::get('/book/{slug}', [\App\Http\Controllers\Public\BookController::class, 'show'])->name('book.show');

// Admin Guest Routes (Login)
Route::middleware('guest:admin')->prefix('admin')->name('admin.')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.submit');
});

// Admin Authenticated Routes
Route::middleware('admin.auth')->prefix('admin')->name('admin.')->group(function () {

    // Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Admin Resources
    Route::resource('books', BookController::class);
    Route::resource('admins', AdminController::class);

    // Leads (NEW)
    Route::get('/leads', [AdminLeadController::class, 'index'])->name('leads.index');

    // Contact Messages (NEW)
    Route::get('/messages', [ContactMessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}', [ContactMessageController::class, 'show'])->name('messages.show');
    Route::delete('/messages/{message}', [ContactMessageController::class, 'destroy'])->name('messages.destroy');

    // Settings
    Route::get('/settings', [SettingsController::class, 'index'])->name('settings.index');
    Route::put('/settings', [SettingsController::class, 'update'])->name('settings.update');

    // Activity Logs
    Route::get('/activity-logs', [ActivityLogController::class, 'index'])->name('activity-logs.index');

    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
});
