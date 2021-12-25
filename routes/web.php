<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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


Route::prefix('/')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
    Route::get('/hotels', [HomeController::class, 'hotels'])->name('hotels');
    Route::get('/references', [HomeController::class, 'references'])->name('references');
    Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
    Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
    Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
    Route::get('/hotel/{id}',[HomeController::class,'hotel'])->name('hotel');
    Route::get('/categoryhotel/{id}',[HomeController::class,'categoryhotel'])->name('categoryhotel');
    Route::post('/gethotel',[HomeController::class,'getHotel'])->name('gethotel');
    Route::get('/hotellist/{search}',[HomeController::class,'hotelList'])->name('hotelList');
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function (){
    Route::get('/',[UserController::class,'index'])->name('myprofile');
    Route::get('mycomments',[UserController::class,'mycomments'])->name('mycomments');
    Route::get('destroymycomment/{id}',[UserController::class,'destroymycomment'])->name('destroymycomment');
    Route::prefix('/hotel')->group(function () {
        Route::get('/', [HotelController::class, 'index'])->name('user_hotel');
        Route::get('create', [HotelController::class, 'create'])->name('user_hotel_create');
        Route::post('store', [HotelController::class, 'store'])->name('user_hotel_store');
        Route::get('edit/{id}', [HotelController::class, 'edit'])->name('user_hotel_edit');
        Route::post('update/{id}', [HotelController::class, 'update'])->name('user_hotel_update');
        Route::get('destroy/{id}', [HotelController::class, 'destroy'])->name('user_hotel_destroy');
        Route::get('show', [HotelController::class, 'show'])->name('user_hotel_show');
    });
    Route::prefix('/image')->group(function(){
        Route::get('create/{hotel_id}', [ImageController::class, 'create'])->name('user_image_add');
        Route::post('store/{hotel_id}', [ImageController::class, 'store'])->name('user_image_store');
        Route::get('destroy/{id}/{hotel_id}', [ImageController::class, 'destroy'])->name('user_image_destroy');
        Route::get('show', [ImageController::class, 'show'])->name('user_image_show');
    });

    Route::prefix('/reservation')->group(function(){
        Route::get('/',[UserController::class, 'reservation'])->name('user_reservation');
        Route::get('new/{hotel_id}/{room_id}',[UserController::class, 'new_reservation'])->name('user_new_reservation');
        Route::post('store_reservation/{hotel_id}/{room_id}',[UserController::class,'store_reservation'])->name('user_store_reservation');
        Route::get('show/{id}',[UserController::class,'detail_reservation'])->name('user_detail_reservation');
    });
});

Route::middleware('auth')->prefix('user')->namespace('myaccount')->group(function (){
    Route::get('/profile',[UserController::class,'index'])->name('userprofile');

});


Route::middleware('auth')->prefix('admin')->group(function (){
    Route::middleware('admin')->group(function (){
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class,'index'])->name('admin_home');

        //Category
        Route::prefix('/category')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
            Route::get('add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
            Route::post('create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
            Route::get('destroy/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_destroy');
            Route::get('show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');
        });

        //Hotel
        Route::prefix('/hotel')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\HotelController::class, 'index'])->name('admin_hotel');
            Route::get('create', [\App\Http\Controllers\Admin\HotelController::class, 'create'])->name('admin_hotel_create');
            Route::post('store', [\App\Http\Controllers\Admin\HotelController::class, 'store'])->name('admin_hotel_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'edit'])->name('admin_hotel_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'update'])->name('admin_hotel_update');
            Route::get('destroy/{id}', [\App\Http\Controllers\Admin\HotelController::class, 'destroy'])->name('admin_hotel_destroy');
            Route::get('show', [\App\Http\Controllers\Admin\HotelController::class, 'show'])->name('admin_hotel_show');
        });

        //Hotel Image
        Route::prefix('/image')->group(function(){
            Route::get('create/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('destroy/{id}/{hotel_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_destroy');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });
        //Hotel Room
        Route::prefix('/room')->group(function(){
            Route::get('create/{hotel_id}', [\App\Http\Controllers\Admin\RoomController::class, 'create'])->name('admin_room_add');
            Route::post('store/{hotel_id}', [\App\Http\Controllers\Admin\RoomController::class, 'store'])->name('admin_room_store');
            Route::get('edit/{id}/{hotel_id}', [\App\Http\Controllers\Admin\RoomController::class, 'edit'])->name('admin_room_edit');
            Route::post('update/{id}/{hotel_id}', [\App\Http\Controllers\Admin\RoomController::class, 'update'])->name('admin_room_update');
            Route::get('destroy/{id}/{hotel_id}', [\App\Http\Controllers\Admin\RoomController::class, 'destroy'])->name('admin_room_destroy');
            Route::get('show', [\App\Http\Controllers\Admin\RoomController::class, 'show'])->name('admin_room_show');
        });
        //Setting
        Route::prefix('/setting')->group(function(){
            Route::get('/', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
            Route::post('update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');
        });

        Route::prefix('messages')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\MessageController::class, 'destroy'])->name('admin_message_destroy');
            Route::get('show',[\App\Http\Controllers\Admin\MessageController::class, 'show'])->name('admin_message_show');
        });


        Route::prefix('comment')->group(function (){
            Route::get('/',[\App\Http\Controllers\Admin\CommentController::class,'index'])->name('admin_comment');
            Route::post('update/{id}',[\App\Http\Controllers\Admin\CommentController::class,'update'])->name('admin_comment_update');
            Route::get('delete/{id}',[\App\Http\Controllers\Admin\CommentController::class,'destroy'])->name('admin_comment_delete');
            Route::get('show/{id}',[\App\Http\Controllers\Admin\CommentController::class,'show'])->name('admin_comment_show');
        });

        Route::prefix('faq')->group(function(){
            Route::get('/', [\App\Http\Controllers\Admin\FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [\App\Http\Controllers\Admin\FaqController::class, 'create'])->name('admin_faq_create');
            Route::post('store', [\App\Http\Controllers\Admin\FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('destroy/{id}', [\App\Http\Controllers\Admin\FaqController::class, 'destroy'])->name('admin_faq_destroy');
            Route::get('show', [\App\Http\Controllers\Admin\FaqController::class, 'show'])->name('admin_faq_show');
        });

        //Reservation
        Route::prefix('/reservation')->group(function () {
            Route::get('/{slug}', [\App\Http\Controllers\Admin\ReservationController::class, 'index'])->name('admin_reservation');
            Route::get('edit/{id}/{slug}', [\App\Http\Controllers\Admin\ReservationController::class, 'edit'])->name('admin_reservation_edit');
            Route::post('update/{id}/{slug}', [\App\Http\Controllers\Admin\ReservationController::class, 'update'])->name('admin_reservation_update');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReservationController::class, 'show'])->name('admin_reservation_show');
        });

        //Users
        Route::prefix('users')->group(function(){
            Route::get('/', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('admin_user');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\UserController::class, 'edit'])->name('admin_user_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\UserController::class, 'update'])->name('admin_user_update');
            Route::get('destroy/{id}', [\App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('admin_user_destroy');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\UserController::class, 'show'])->name('admin_user_show');
            Route::get('roles/{id}',[\App\Http\Controllers\Admin\UserController::class,'user_roles'])->name('admin_user_roles');
            Route::post('user_role_store/{id}',[\App\Http\Controllers\Admin\UserController::class,'user_role_store'])->name('admin_user_role_store');
            Route::get('user_role_delete/{user_id}/{role_id}',[\App\Http\Controllers\Admin\UserController::class,'user_role_delete'])->name('admin_user_role_delete');
        });
    });
});
Route::get('/admin/login', [\App\Http\Controllers\Admin\HomeController::class,'login'])->name('admin_login');
Route::post('/admin/logincheck', [\App\Http\Controllers\Admin\HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout',[HomeController::class, 'logout'])->name('logout');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
