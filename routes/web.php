<?php

use App\Http\Controllers\PDCIndex;
use App\Http\Controllers\TDCIndex;
use App\Livewire\Admin\AcceptedList\AcceptedListIndex;
use App\Livewire\Admin\Calendar\CalendarIndex;
use App\Livewire\Admin\Dashboard\DashboardIndex;
use App\Livewire\Admin\Instructor\InstructorIndex;
use App\Livewire\Admin\ScheduleList\ScheduleListIndex;
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
Route::post('/tdc', [TDCIndex::class, 'save'])->name('tdc-save');

Route::get('/pdc', [PDCIndex::class, 'render'])->name('pdc-index');
Route::post('/pdc', [TDCIndex::class, 'save'])->name('pdc-save');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])
    ->group(function () {

    Route::get('/dashboard', DashboardIndex::class)->name('dashboard');
    Route::get('/waitlist', WaitlistIndex::class)->name('waitlist');
    Route::get('/accepted-list', AcceptedListIndex::class)->name('accepted-list');
    Route::get('/schedule-list', ScheduleListIndex::class)->name('schedule-list');
    Route::get('/calendar', CalendarIndex::class)->name('calendar');
    Route::get('/instructor', InstructorIndex::class)->name('instructor');

});