<?php

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



Route::get('api-admin','QuanTriVienController@layThongTin');
 
Route::get('dang-nhap','QuanTriVienController@dangNhap')->name('dang-nhap')->middleware('guest');

Route::post('dang-nhap','QuanTriVienController@xuLyDangNhap')->name('xu-ly-dang-nhap');

Route::get('dang-xuat','QuanTriVienController@dangXuat')->name('dang-xuat');

Route::middleware('auth')->group(function(){
	Route::get('/', function () {
	    return view('layout');
	})->name('trang-chu');

	Route::prefix('linh-vuc')->group(function(){
		Route::name('linh-vuc.')->group(function(){
			Route::get('/','LinhVucController@index')->name('danh-sach')->middleware('auth');
			Route::get('them-moi','LinhVucController@create')->name('them-moi');
			Route::post('them-moi','LinhVucController@store')->name('xu-li-them-moi');
			Route::get('cap-nhat/{id}','LinhVucController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','LinhVucController@update')->name('xu-li-cap-nhat');
			Route::get('xoa/{id}','LinhVucController@destroy')->name('xoa');
		});
	});

	Route::prefix('cau-hoi')->group(function(){
		Route::name('cau-hoi.')->group(function(){
			Route::get('/','CauHoiController@index')->name('danh-sach');
			Route::get('them-moi','CauHoiController@create')->name('them-moi');
			Route::post('them-moi','CauHoiController@store')->name('xu-li-them-moi');
			Route::get('cap-nhat/{id}','CauHoiController@edit')->name('cap-nhat');
			Route::post('cap-nhat/{id}','CauHoiController@update')->name('xu-li-cap-nhat');
			Route::get('xoa/{id}','CauHoiController@destroy')->name('xoa');
		});
	});

	Route::prefix('nguoi-choi')->group(function(){
		Route::name('nguoi-choi.')->group(function(){
			Route::get('/','NguoiChoiController@index')->name('danh-sach');
			Route::get('them-moi','NguoiChoiController@create')->name('them-moi');
			Route::post('them-moi','NguoiChoiController@store')->name('xu-li-them-moi');
			Route::get('xoa/{id}','NguoiChoiController@destroy')->name('xoa');
		});
	});
});





// Route::get('/', function () {
//    return view('login\dang-nhap');
// })->name('dangnhap');