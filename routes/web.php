<?php

use App\Http\Controllers\Admin\BulkEmailController;
use App\Http\Controllers\Admin\EmailTemplateController;
use App\Http\Controllers\Admin\SmtpAccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GalleryController;

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

Route::get('/', function () {
    $scholarImage = \App\Models\Gallery::where('category', 'scholarship')
                        ->where('status', 'active')
                        ->latest()
                        ->first();

    $communityImage = \App\Models\Gallery::where('category', 'community')
                        ->where('status', 'active')
                        ->latest()
                        ->first();

    $educationImage = \App\Models\Gallery::where('category', 'education')
                        ->where('status', 'active')
                        ->latest()
                        ->first();

    $foodImage = \App\Models\Gallery::where('category', 'food')
                        ->where('status', 'active')
                        ->latest()
                        ->first();

    return view('welcome', compact('scholarImage', 'communityImage', 'educationImage', 'foodImage'));
});


Route::get('/gallery-page', [GalleryController::class, 'gallery'])->name('gallery.index');
Route::get('/gallery-detail/{id}', [GalleryController::class, 'galleryDetail'])->name('gallery.detail');

use App\Http\Controllers\ContactMessageController;

// Frontend form submit
Route::post('/contact/store', [ContactMessageController::class, 'store'])->name('contact.store');



use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


// Auth Pages
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::get('/admin/login', [AuthController::class, 'adminshowLogin']);
Route::post('/admin/login', [AuthController::class, 'adminlogin']);

// Form Actions
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::post('/admin/logout', [AuthController::class, 'adminlogout'])->name('admin.logout');

// Protected Page
use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Mail;

// Donate Page
Route::get('/donate', [DonationController::class, 'index'])->middleware('auth');

// Submit Donation
Route::post('/donate', [DonationController::class, 'store'])->middleware('auth');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])
    ->middleware('auth');



Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {


        Route::get('/dashboard', [DashboardController::class, 'adminindex'])->name('dashboard');

        Route::get('/test-mail', function () {
            Mail::to('infoharry99@gmail.com')
                    ->send(new \App\Mail\BulkMail());
                return 'Mail sent';
            });
        Route::post(
            '/bulk-emails/test-mail',
            [App\Http\Controllers\Admin\BulkEmailController::class, 'sendTestMail']
        )->name('bulk-emails.test-mail');
    
        
        Route::post(
            '/bulk-emails/{id}/toggle-block',
            [BulkEmailController::class, 'toggleBlock']
        )->name('bulk-emails.toggle-block');
    
        Route::get('/email-template', [EmailTemplateController::class, 'edit'])
            ->name('email-template.edit');
        
        Route::post('/email-template', [EmailTemplateController::class, 'update'])
            ->name('email-template.update');
        
        Route::post(
            '/bulk-emails/reset-all',
            [BulkEmailController::class, 'resetAll']
        )->name('bulk-emails.reset-all');
    
        Route::post(
            '/bulk-emails/{id}/reset',
            [BulkEmailController::class, 'resetStatus']
        )->name('bulk-emails.reset');
    
        // Bulk Email Management
        Route::get('bulk-emails', [BulkEmailController::class, 'indexs'])
            ->name('admin.bulk-emails.index');
        Route::get('bulk-emails', [BulkEmailController::class, 'index'])
            ->name('bulk-emails.index');
    
        Route::post('/bulk-emails', [BulkEmailController::class, 'store'])
            ->name('bulk-emails.store');
    
        // SMTP Management
        Route::get('n/smtp', [SmtpAccountController::class, 'index'])
            ->name('smtp.index');
    
        Route::post('/smtp', [SmtpAccountController::class, 'store'])
            ->name('smtp.store');


        Route::get('/donations', [DonationController::class, 'adminindex'])
        ->name('donations.index');

        Route::post('/donations/{id}/upload-excel', 
            [DonationController::class, 'uploadExcel']
        )->name('donations.upload.excel');


        

       
            Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery.index');
            Route::post('/gallery/store', [GalleryController::class, 'store'])->name('gallery.store');
            Route::post('/gallery/update/{id}', [GalleryController::class, 'update'])->name('gallery.update');
            Route::get('/gallery/delete/{id}', [GalleryController::class, 'destroy'])->name('gallery.delete');

            Route::get('/contact', [ContactMessageController::class, 'index'])->name('contact.index');
            Route::get('/contact/delete/{id}', [ContactMessageController::class, 'destroy'])->name('contact.delete');
        

});            