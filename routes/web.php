<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Gallerycontroller;
use App\Http\Controllers\LinksController;
use App\Http\Controllers\SubController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\ContactController;

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


// headerlinks
Route::get('/',[LinksController::class,'index']);
Route::get('/sermons',[LinksController::class,'sermon']);
Route::get('/gallery', [LinksController::class,'gallery']);
Route::get('/contact',[LinksController::class,'contact'] );
Route::get('/about',[LinksController::class,'about']);
Route::get('/tithe',[LinksController::class,'tithe']);
Route::get('/event',[LinksController::class,'event']);
Route::get('/financial',[LinksController::class,'financial']);
Route::get('/sermon/{id}',[LinksController::class,'detail']);
Route::post('/sub',[SubController::class,'store']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::resource('members', MemberController::class);


Route::get('/members_form',[MemberController::class,'create'])->name('members_form');
Route::post('/members_store',[MemberController::class,'store'])->name('members_store');




// Managing post
Auth::routes();
Route::get('/post', [PostController::class, 'indexPost'])->name('indexPost');
Route::post('/add-Post', [PostController::class, 'addPost'])->name('addPost');
Route::get('/hidePost/{id}', [PostController::class, 'hidePost'])->name('hidePost');
Route::get('/unhidePost/{id}', [PostController::class, 'unhidePost'])->name('unhidePost');
Route::get('/editPost/{id}', [PostController::class, 'editPost'])->name('editPost');
Route::put('/updatePost/{id}', [PostController::class, 'updatePost'])->name('updatePost');
Route::get('/deletePost/{id}', [PostController::class, 'deletePost'])->name('deletePost');



// Managing Gallery
Auth::routes();
Route::get('/Gallery', [GalleryController::class, 'indexGallery'])->name('indexGallery');
Route::post('/add-Gallery', [GalleryController::class, 'addGallery'])->name('addGallery');
Route::get('/hideGallery/{id}', [GalleryController::class, 'hideGallery'])->name('hideGallery');
Route::get('/unhideGallery/{id}', [GalleryController::class, 'unhideGallery'])->name('unhideGallery');
Route::get('/editGallery/{id}', [GalleryController::class, 'editGallery'])->name('editGallery');
Route::put('/updateGallery/{id}', [GalleryController::class, 'updateGallery'])->name('updateGallery');
Route::get('/deleteGallery/{id}', [GalleryController::class, 'deleteGallery'])->name('deleteGallery');

// payment
Route::get('/payment/{id}',[PaymentController::class,'showpayment'])->name('showpayment')->middleware('auth');
Route::get('verify-payment/{reference}', [PaymentController::class, 'Payment'])->name('payment.verify');
Route::get('payment', [PaymentController::class, 'paymentList'])->name('paymentList')->middleware('auth');
Route::get('/payments/delete/{id}', [PaymentController::class,'deletePayment'])->name('deletePayment')->middleware('auth');
Route::get('/payments/hide/{id}', [PaymentController::class,'hidePayment'])->name('hidePayment')->middleware('auth');
Route::get('/payments/unhide/{id}', [PaymentController::class,'unhidePayment'])->name('unhidePayment')->middleware('auth');


// financial
Auth::routes();
Route::get('/Financial', [FinancialController::class, 'indexFinancial'])->name('indexFinancial');
Route::post('/add-Financial', [FinancialController::class, 'addFinancial'])->name('addFinancial');
Route::get('/hideFinancial/{id}', [FinancialController::class, 'hideFinancial'])->name('hideFinancial');
Route::get('/unhideFinancial/{id}', [FinancialController::class, 'unhideFinancial'])->name('unhideFinancial');
Route::get('/editFinancial/{id}', [FinancialController::class, 'editFinancial'])->name('editFinancial');
Route::put('/updateFinancial/{id}', [FinancialController::class, 'updateFinancial'])->name('updateFinancial');
Route::get('/deleteFinancial/{id}', [FinancialController::class, 'deleteFinancial'])->name('deleteFinancial');


// Events
Auth::routes();
Route::get('/Event', [EventController::class, 'indexEvent'])->name('indexEvent');
Route::post('/add-Event', [EventController::class, 'addEvent'])->name('addEvent');
Route::get('/hideEvent/{id}', [EventController::class, 'hideEvent'])->name('hideEvent');
Route::get('/unhideEvent/{id}', [EventController::class, 'unhideEvent'])->name('unhideEvent');
Route::get('/editEvent/{id}', [EventController::class, 'editEvent'])->name('editEvent');
Route::put('/updateEvent/{id}', [EventController::class, 'updateEvent'])->name('updateEvent');
Route::get('/deleteEvent/{id}', [EventController::class, 'deleteEvent'])->name('deleteEvent');

// Events
Auth::routes();
Route::get('/members',[MemberController::class,'Index'])->name('members')->middleware('auth');
Route::post('/add-Member', [MemberController::class, 'addMember'])->name('addMember');
Route::get('/hideMember/{id}', [MemberController::class, 'hideMember'])->name('hideMember');
Route::get('/unhideMember/{id}', [MemberController::class, 'unhideMember'])->name('unhideMember');
Route::get('/editMember/{id}', [MemberController::class, 'editMember'])->name('editMember');
Route::put('/updateMember/{id}', [MemberController::class, 'updateMember'])->name('updateMember');
Route::get('/deleteMember/{id}', [MemberController::class, 'deleteMember'])->name('deleteMember');


// Store the contact form submission
Route::post('/contact', [ContactController::class, 'store'])->name('contacts.store');

Route::get('/contact', [ContactController::class, 'index'])->name('contacts');
Route::get('/hideContact/{id}', [ContactController::class, 'hideContact'])->name('hideContact');
Route::get('/unhideContact/{id}', [ContactController::class, 'unhideContact'])->name('unhideContact');
Route::get('/editContact/{id}', [ContactController::class, 'editContact'])->name('editContact');
Route::put('/updateContact/{id}', [ContactController::class, 'updateContact'])->name('updateContact');
Route::get('/deleteContact/{id}', [ContactController::class, 'deleteContact'])->name('deleteContact');
