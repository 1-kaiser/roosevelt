<?php

use App\Http\Controllers\CustomerLoginController;
use App\Http\Controllers\CustomerRegisterController;
use App\Http\Controllers\FAQ;
use App\Http\Controllers\PDCIndex;
use App\Http\Controllers\TDCIndex;
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

    Route::get('/customer', function () {
        return view('customer/customer-index');
    })->name('customer-index');

    Route::get('/tdc', [TDCIndex::class, 'render'])->name('tdc-index');
    Route::post('/tdc-process', [TDCIndex::class, 'save'])->name('tdc-save');

    Route::get('/pdc', [PDCIndex::class, 'render'])->name('pdc-index');
    Route::post('/pdc', [PDCIndex::class, 'save'])->name('pdc-save');

    Route::post('/customer', [FAQ::class, 'save'])->name('faqs');

    Route::get('customer-login', [CustomerLoginController::class, 'render'])->name('customer-login');
    Route::post('customer-authenticate', [CustomerLoginController::class, 'authenticate'])->name('customer-authenticate');
    
    Route::get('customer-register', [CustomerRegisterController::class, 'render'])->name('customer-register');
    Route::post('register-process', [CustomerRegisterController::class, 'registerProcessRequest'])->name('register-process');

    Route::get('customer-logout', [CustomerLoginController::class, 'logout'])->name('customer-logout');


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