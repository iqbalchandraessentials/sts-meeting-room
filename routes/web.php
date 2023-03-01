<?php

use App\Http\Controllers\RequisitionFormController;
use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('Auth.login');});


// Route::middleware(['auth'])->group(function () {
// });
Route::get('/Auth/forgot', function () { return view('Auth.forgot'); });

Auth::routes();
Route::resource('requisition', RequisitionFormController::class);

Route::get('/dashboard', function () { return view('Dashboard.index'); });

Route::get('/meeting-room', function () { return view('MeetingRoom.index'); });
Route::get('/meeting-room/add-new', function () { return view('MeetingRoom._add'); });
Route::get('/meeting-room/details', function () { return view('MeetingRoom.detailMeetingRoom'); });
Route::get('/meeting-room/details/edit', function () { return view('MeetingRoom._edit'); });
Route::get('/employee', function () { return view('Employee.index'); });
Route::get('/guest', function () { return view('Guest.index'); });


Route::get('/facilities', function () { return view('Facility.facility'); });
Route::get('/facilities/add-new', function () { return view('Facility._addFacility'); });
Route::get('/facilities/edit', function () { return view('Facility._editFacility'); });
Route::get('/facilities/categories', function () { return view('Facility.category'); });
Route::get('/facilities/categories/add-new', function () { return view('Facility._addCategory'); });
Route::get('/facilities/categories/edit', function () { return view('Facility._editCategory'); });

Route::get('/foodandbaverages', function () { return view('FnB.index'); });
Route::get('/foodandbaverages/menu', function () { return view('FnB.menu'); });
Route::get('/foodandbaverages/menu/add-new', function () { return view('FnB._addMenu'); });
Route::get('/foodandbaverages/menu/edit', function () { return view('FnB._editMenu'); });
Route::get('/foodandbaverages/categories', function () { return view('FnB.category'); });
Route::get('/foodandbaverages/categories/add-new', function () { return view('FnB._addCategory'); });
Route::get('/foodandbaverages/categories/edit', function () { return view('FnB._editCategory'); });

Route::get('/book-now', function () { return view('Booking.bookNow'); });
Route::get('/book-now/book', function () { return view('Booking._book'); });
Route::get('/my-booking', function () { return view('Booking.myBooking'); });
Route::get('/my-meeting-history', function () { return view('Booking.myMeetingHistory'); });

Route::get('/report', function () { return view('Report.index'); });

Route::get('/my-profile', function () { return view('Account.index'); });
Route::get('/user', function () { return view('User.index'); });

