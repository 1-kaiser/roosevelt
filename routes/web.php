<?php

use App\Http\Controllers\CustomerIndex;
use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\CustomerRegisterController;
use App\Http\Controllers\FAQ;
use App\Http\Controllers\PDCIndex;
use App\Http\Controllers\TDCIndex;
use App\Http\Middleware\CustomerRedirectLogin;
use App\Livewire\Admin\AcceptedList\PdcAcceptedList;
use App\Livewire\Admin\AcceptedList\TdcAcceptedList;
use App\Livewire\Admin\Calendar\CalendarIndex;
use App\Livewire\Admin\Dashboard\DashboardIndex;
use App\Livewire\Admin\Denied\DeniedHistory;
use App\Livewire\Admin\Instructor\InstructorIndex;
use App\Livewire\Admin\Waitlist\WaitlistIndex;
use Illuminate\Support\Facades\Route;


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
        return view('welcome');
    });

    // Route::get('/customer_view', function () {
    //     return view('customer/customer-index-before');
    // })->name('customer-index-before');

    Route::get('/customer', [CustomerIndex::class, 'render'])->name('customer-index');
    Route::post('/customer', [FAQ::class, 'save'])->name('faqs');

    Route::controller(TDCIndex::class)->group(function () {
        Route::get('/tdc', 'render')->name('tdc-index');
        Route::post('/tdc-process', 'save')->name('tdc-save');
    });
    
    Route::controller(PDCIndex::class)->group(function () {
        Route::get('/pdc', 'render')->name('pdc-index');
        Route::post('/pdc', 'savePDC')->name('pdc-save');
    });
    
    Route::controller(CustomerLoginController::class)->group(function () {
        Route::get('customer-login','render')->middleware(CustomerRedirectLogin::class)->name('customer-login');
        Route::post('customer-authenticate','authenticate')->name('customer-authenticate');
        Route::get('customer-logout','logout')->name('customer-logout');
    });
    
    Route::controller(CustomerRegisterController::class)->group(function () {
        Route::get('customer-register','render')->name('customer-register');
        Route::post('register-process','registerProcessRequest')->name('register-process');
    });

    Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])
        ->group(function () {
        Route::get('/dashboard', DashboardIndex::class)->name('dashboard');
        Route::get('/waitlist', WaitlistIndex::class)->name('waitlist');
        Route::get('/tdc-accepted-list', TdcAcceptedList::class)->name('tdc-accepted-list');
        Route::get('/pdc-accepted-list', PdcAcceptedList::class)->name('pdc-accepted-list');
        Route::get('/denied-history', DeniedHistory::class)->name('denied-history');
        Route::get('/instructor', InstructorIndex::class)->name('instructor');
        Route::get('/calendar', CalendarIndex::class)->name('calendar');
    });