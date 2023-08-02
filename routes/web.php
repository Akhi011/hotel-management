<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\RoomCategoryController;
use App\Http\Controllers\AmenitiesController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FeedbackController;



Route::get('/admin/login',[UserController::class,'login'])->name('login');
Route::post('/admin/do-login',[UserController::class,'dologin'])->name('admin.do.login');




Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){

Route::get('/',[HomeController::class,'Home'])->name('home');
Route::get('/',[HomeController::class,'home'])->name ('home');
Route::get('/logout',[UserController::class,'logout'])->name('admin.logout');






Route::get('/Room',[RoomController::class,'Room'])->name('room');
Route::get('/RoomCategory',[RoomCategoryController::class,'RoomCategory'])->name('roomcategory');
Route::get('/Amenities',[AmenitiesController::class,'Amenities'])->name('amenities');
Route::get('/Payment',[PaymentController::class,'Payment'])->name('payment');
Route::get('/Booking',[BookingController::class,'Booking'])->name('booking');
Route::get('/Employee',[EmployeeController::class,'list'])->name('employee.list');
Route::get('/Report',[ReportController::class,'Report'])->name('report');
Route::get('/Feedback',[FeedbackController::class,'Feedback'])->name('feedback');






//guest
 Route::get('/guest-list',[GuestController::class,'list'])->name('guest.list');
 Route::get('/guest-create-form',[GuestController::class,'create'])->name('guest.create');
 Route::post('/guest-store',[GuestController::class,'store'])->name('guest.store');


//room list
 Route::get('/Room-list',[RoomController::class,'list'])->name('room.list');
 Route::get('/room-create-form',[RoomController::class,'create'])->name('room.create');
 Route::post('/room-store',[RoomController::class,'store'])->name('room.store');
 Route::get('room/edit/{id}',[RoomController::class,'edit'])->name ('room.edit');
 Route::get('room/delete/{id}',[RoomController::class,'delete'])->name ('room.delete');
 Route::get('room/update{id}',[RoomController::class,'update'])->name ('room.update');



//room category
 Route::get('/Room Category-list',[RoomCategoryController::class,'list'])->name('roomcategory.list');
 Route::get('/Room Category-create-form',[RoomCategoryController::class,'create'])->name('roomcategory.create');
 Route::post('/Room Category-store',[RoomCategoryController::class,'store'])->name('roomcategory.store');
 Route::get('roomcategory/edit/{id}',[RoomCategoryController::class,'edit'])->name ('roomcategory.edit');
 Route::get('roomcategory/delete/{id}',[RoomCategoryController::class,'delete'])->name ('roomcategory.delete');
 Route::get('roomcategory/update{id}',[RoomCategoryController::class,'update'])->name ('roomcategory.update');





//amenities
 Route::get('/Amenities-list',[AmenitiesController::class,'list'])->name('Amenities.list');
 Route::get('/Amenities-create-form',[AmenitiesController::class,'create'])->name('Amenities.create');
 Route::post('/Amenities-store',[AmenitiesController::class,'store'])->name('Amenities.store');



 
//payment
 Route::get('/Payment-list',[PaymentController::class,'list'])->name('payment.list');
 Route::get('/Payment-create-form',[PaymentController::class,'create'])->name('payment.create');
 Route::post('/Payment-store',[PaymentController::class,'store'])->name('payment.store');



//employee
 Route::get('/Employee-list',[EmployeeController::class,'list'])->name('employee.list');
 Route::get('/Employee-create-form',[EmployeeController::class,'create'])->name('employee.create');
 Route::post('/Employee-store',[EmployeeController::class,'store'])->name('employee.store');
 Route::get('employee/edit/{id}',[EmployeeController::class,'edit'])->name ('employee.edit');
 Route::get('employee/delete/{id}',[EmployeeController::class,'delete'])->name ('employee.delete');
 Route::get('employee/update{id}',[EmployeeController::class,'update'])->name ('employee.update');


//report
 Route::get('/Report-list',[ReportController::class,'list'])->name('report.list');
 Route::get('/Report-create-form',[ReportController::class,'create'])->name('report.create');
 Route::post('/Report-store',[ReportController::class,'store'])->name('report.store');



//feedback
 Route::get('/Feedback-list',[FeedbackController::class,'list'])->name('feedback.list');
 Route::get('/Feedback-create-form',[FeedbackController::class,'create'])->name('feedback.create');
 Route::post('/Feedback-store',[FeedbackController::class,'store'])->name('feedback.store');

});








//booking
Route::get('/Booking-list',[BookingController::class,'list'])->name('booking.list');
Route::get('/Booking-create-form',[BookingController::class,'create'])->name('booking.create');
Route::post('/Booking-store',[BookingController::class,'store'])->name('booking.store');
