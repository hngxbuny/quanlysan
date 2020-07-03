<?php

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
    return view('welcome');
})->name('welcome)';
Route::get('login','demo_controller@login')->name('login');
Route::post('login','demo_controller@login_process')->name('login_process');
Route::get('logout','demo_controller@logout')->name('logout');
Route::group(['prefix'=>'quan_ly_san_bong','as'=>'quan_ly_san_bong.','middleware'=>['demo_middleware']],function(){
	Route::get('danh_sach_san_bong','demo_controller@danh_sach')->name('danh_sach_san_bong');
	Route::get('them_san_bong','demo_controller@them_san_bong')->name('them_san_bong');
	Route::post('them_san_bong','demo_controller@them_xu_ly')->name('them_xu_ly');
	Route::get('sua_san_bong/{ma_san_bong}','demo_controller@sua_san_bog')->name('sua_san_bong');
	Route::get('sua_san_bong/{ma_san_bong}','demo_controller@sua_xu_ly')->name('sua_xu_ly');
});

