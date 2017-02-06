<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

///////////////////////////////////////// BACKEND ROUTE /////////////////////////////////////////
Route::get('/', function () {
  return view('backend/pages/login');
})->name('login.pages');

Route::get('backend/dashboard', 'DashboardController@index')->name('dashboard');

// =======================================================================================================================
//Informasi Profile
Route::post('admin/store-profile', 'BeritaProfileController@store')->name('profile.store');
Route::get('admin/publish-profile/{id}', 'BeritaProfileController@flagpublish')->name('profile.flagpublish');
Route::get('admin/edit-profile/{id}', 'BeritaProfileController@edit')->name('profile.edit');
Route::post('admin/update-profile/{id}', 'BeritaProfileController@update')->name('profile.update');
Route::get('admin/delete-profile/{id}', 'BeritaProfileController@delete')->name('profile.delete');
Route::get('admin/lihat-profile', 'BeritaProfileController@lihat')->name('profile.lihat');
Route::get('admin/tambah-profile', 'BeritaProfileController@tambah')->name('profile.tambah');
//Informasi Profile kategori
Route::get('admin/lihat-kategori-profile', 'KategoriProfileController@lihatkategori')->name('profile.kategori.lihat');
Route::post('admin/store-kategori-profile', 'KategoriProfileController@store')->name('profile.kategori.store');
Route::post('admin/edit-kategori-profile', 'KategoriProfileController@edit')->name('profile.kategori.edit');
Route::get('admin/bind-kategori-profile/{id}', 'KategoriProfileController@bind')->name('profile.kategori.bind');
Route::get('admin/delete-kategori-profile/{id}', 'KategoriProfileController@delete')->name('profile.kategori.delete');
Route::get('admin/change-status-kategori-profile/{id}', 'KategoriProfileController@changeflag')->name('profile.kategori.changeflag');
// =======================================================================================================================


// =======================================================================================================================
//Informasi Berita Dr Doomels kategori
Route::get('admin/lihat-drdoomels', 'BeritaDrDoomelsController@lihat')->name('drdoomels.lihat');
Route::get('admin/tambah-drdoomels', 'BeritaDrDoomelsController@tambah')->name('drdoomels.tambah');
Route::post('admin/store-drdoomels', 'BeritaDrDoomelsController@store')->name('drdoomels.store');
Route::get('admin/edit-drdoomels/{id}', 'BeritaDrDoomelsController@edit')->name('drdoomels.edit');
Route::post('admin/update-drdoomels', 'BeritaDrDoomelsController@update')->name('drdoomels.update');
Route::get('admin/publish-drdoomels/{id}', 'BeritaDrDoomelsController@flagpublish')->name('drdoomels.flagpublish');
Route::get('admin/headline-drdoomels/{id}', 'BeritaDrDoomelsController@headline')->name('drdoomels.headline');
Route::get('admin/delete-drdoomels/{id}', 'BeritaDrDoomelsController@delete')->name('drdoomels.delete');
Route::get('admin/preview-drdoomels/{id}', 'BeritaDrDoomelsController@preview')->name('drdoomels.preview');

//Kategori Berita Dr Doomels kategori
Route::get('admin/kategori-drdoomels', 'KategoriDrDoomelsController@index')->name('drdoomels.kategori.index');
Route::post('admin/store-kategori-drdoomels', 'KategoriDrDoomelsController@store')->name('drdoomels.kategori.store');
Route::post('admin/edit-kategori-drdoomels', 'KategoriDrDoomelsController@edit')->name('drdoomels.kategori.edit');
Route::get('admin/bind-kategori-drdoomels/{id}', 'KategoriDrDoomelsController@bind')->name('drdoomels.kategori.bind');
Route::get('admin/delete-kategori-drdoomels/{id}', 'KategoriDrDoomelsController@delete')->name('drdoomels.kategori.delete');
Route::get('admin/change-status-kategori-drdoomels/{id}', 'KategoriDrDoomelsController@changeflag')->name('drdoomels.kategori.changeflag');
// =======================================================================================================================

// =======================================================================================================================
//Informasi Berita kategori
Route::get('admin/lihat-news', 'BeritaNewsController@lihat')->name('news.lihat');
Route::get('admin/tambah-news', 'BeritaNewsController@tambah')->name('news.tambah');
Route::post('admin/store-news', 'BeritaNewsController@store')->name('news.store');
Route::get('admin/edit-news/{id}', 'BeritaNewsController@edit')->name('news.edit');
Route::post('admin/update-news', 'BeritaNewsController@update')->name('news.update');
Route::get('admin/publish-news/{id}', 'BeritaNewsController@flagpublish')->name('news.flagpublish');
Route::get('admin/headline-news/{id}', 'BeritaNewsController@headline')->name('news.headline');
Route::get('admin/delete-news/{id}', 'BeritaNewsController@delete')->name('news.delete');
Route::get('admin/preview-news/{id}', 'BeritaNewsController@preview')->name('news.preview');

//Kategori Berita kategori
Route::get('admin/kategori-news', 'KategoriNewsController@index')->name('news.kategori.index');
Route::post('admin/store-kategori-news', 'KategoriNewsController@store')->name('news.kategori.store');
Route::post('admin/edit-kategori-news', 'KategoriNewsController@edit')->name('news.kategori.edit');
Route::get('admin/bind-kategori-news/{id}', 'KategoriNewsController@bind')->name('news.kategori.bind');
Route::get('admin/delete-kategori-news/{id}', 'KategoriNewsController@delete')->name('news.kategori.delete');
Route::get('admin/change-status-kategori-news/{id}', 'KategoriNewsController@changeflag')->name('news.kategori.changeflag');
// =======================================================================================================================


// =======================================================================================================================
//Informasi Berita Traveller kategori
Route::get('admin/lihat-traveller', 'BeritaTravellerController@lihat')->name('traveller.lihat');
Route::get('admin/tambah-traveller', 'BeritaTravellerController@tambah')->name('traveller.tambah');
Route::post('admin/store-traveller', 'BeritaTravellerController@store')->name('traveller.store');
Route::get('admin/edit-traveller/{id}', 'BeritaTravellerController@edit')->name('traveller.edit');
Route::post('admin/update-traveller', 'BeritaTravellerController@update')->name('traveller.update');
Route::get('admin/publish-traveller/{id}', 'BeritaTravellerController@flagpublish')->name('traveller.flagpublish');
Route::get('admin/headline-traveller/{id}', 'BeritaTravellerController@headline')->name('traveller.headline');
Route::get('admin/delete-traveller/{id}', 'BeritaTravellerController@delete')->name('traveller.delete');
Route::get('admin/preview-traveller/{id}', 'BeritaTravellerController@preview')->name('traveller.preview');

//Kategori Berita Traveller kategori
Route::get('admin/kategori-traveller', 'KategoriTravellerController@index')->name('traveller.kategori.index');
Route::post('admin/store-kategori-traveller', 'KategoriTravellerController@store')->name('traveller.kategori.store');
Route::post('admin/edit-kategori-traveller', 'KategoriTravellerController@edit')->name('traveller.kategori.edit');
Route::get('admin/bind-kategori-traveller/{id}', 'KategoriTravellerController@bind')->name('traveller.kategori.bind');
Route::get('admin/delete-kategori-traveller/{id}', 'KategoriTravellerController@delete')->name('traveller.kategori.delete');
Route::get('admin/change-status-kategori-traveller/{id}', 'KategoriTravellerController@changeflag')->name('traveller.kategori.changeflag');
// =======================================================================================================================


// =======================================================================================================================
//Informasi Berita Hobby kategori
Route::get('admin/lihat-hobby', 'BeritaHobbyController@lihat')->name('hobby.lihat');
Route::get('admin/tambah-hobby', 'BeritaHobbyController@tambah')->name('hobby.tambah');
Route::post('admin/store-hobby', 'BeritaHobbyController@store')->name('hobby.store');
Route::get('admin/edit-hobby/{id}', 'BeritaHobbyController@edit')->name('hobby.edit');
Route::post('admin/update-hobby', 'BeritaHobbyController@update')->name('hobby.update');
Route::get('admin/publish-hobby/{id}', 'BeritaHobbyController@flagpublish')->name('hobby.flagpublish');
Route::get('admin/headline-hobby/{id}', 'BeritaHobbyController@headline')->name('hobby.headline');
Route::get('admin/delete-hobby/{id}', 'BeritaHobbyController@delete')->name('hobby.delete');
Route::get('admin/preview-hobby/{id}', 'BeritaHobbyController@preview')->name('hobby.preview');

//Kategori Berita Hobby kategori
Route::get('admin/kategori-hobby', 'KategoriHobbyController@index')->name('hobby.kategori.index');
Route::post('admin/store-kategori-hobby', 'KategoriHobbyController@store')->name('hobby.kategori.store');
Route::post('admin/edit-kategori-hobby', 'KategoriHobbyController@edit')->name('hobby.kategori.edit');
Route::get('admin/bind-kategori-hobby/{id}', 'KategoriHobbyController@bind')->name('hobby.kategori.bind');
Route::get('admin/delete-kategori-hobby/{id}', 'KategoriHobbyController@delete')->name('hobby.kategori.delete');
Route::get('admin/change-status-kategori-hobby/{id}', 'KategoriHobbyController@changeflag')->name('hobby.kategori.changeflag');
// =======================================================================================================================


// =======================================================================================================================
//Informasi Berita Cebok kategori
Route::get('admin/lihat-cebok', 'BeritaCebokController@lihat')->name('cebok.lihat');
Route::get('admin/tambah-cebok', 'BeritaCebokController@tambah')->name('cebok.tambah');
Route::post('admin/store-cebok', 'BeritaCebokController@store')->name('cebok.store');
Route::get('admin/edit-cebok/{id}', 'BeritaCebokController@edit')->name('cebok.edit');
Route::post('admin/update-cebok', 'BeritaCebokController@update')->name('cebok.update');
Route::get('admin/publish-cebok/{id}', 'BeritaCebokController@flagpublish')->name('cebok.flagpublish');
Route::get('admin/headline-cebok/{id}', 'BeritaCebokController@headline')->name('cebok.headline');
Route::get('admin/delete-cebok/{id}', 'BeritaCebokController@delete')->name('cebok.delete');
Route::get('admin/preview-cebok/{id}', 'BeritaCebokController@preview')->name('cebok.preview');

//Kategori Berita Cebok kategori
Route::get('admin/kategori-cebok', 'KategoriCebokController@index')->name('cebok.kategori.index');
Route::post('admin/store-kategori-cebok', 'KategoriCebokController@store')->name('cebok.kategori.store');
Route::post('admin/edit-kategori-cebok', 'KategoriCebokController@edit')->name('cebok.kategori.edit');
Route::get('admin/bind-kategori-cebok/{id}', 'KategoriCebokController@bind')->name('cebok.kategori.bind');
Route::get('admin/delete-kategori-cebok/{id}', 'KategoriCebokController@delete')->name('cebok.kategori.delete');
Route::get('admin/change-status-kategori-cebok/{id}', 'KategoriCebokController@changeflag')->name('cebok.kategori.changeflag');
// =======================================================================================================================


//========================================================================================================================
//Informasi Bagi Pengetahuan
Route::get('admin/lihat-bagi-pengetahuan', 'BeritaPengetahuanController@lihat')->name('pengetahuan.lihat');
Route::get('admin/tambah-bagi-pengetahuan', 'BeritaPengetahuanController@tambah')->name('pengetahuan.tambah');
Route::post('admin/store-bagi-pengetahuan', 'BeritaPengetahuanController@store')->name('pengetahuan.store');
Route::get('admin/edit-bagi-pengetahuan/{id}', 'BeritaPengetahuanController@edit')->name('pengetahuan.edit');
Route::post('admin/update-bagi-pengetahuan', 'BeritaPengetahuanController@update')->name('pengetahuan.update');
Route::get('admin/publish-bagi-pengetahuan/{id}', 'BeritaPengetahuanController@flagpublish')->name('pengetahuan.flagpublish');
Route::get('admin/headline-bagi-pengetahuan/{id}', 'BeritaPengetahuanController@headline')->name('pengetahuan.headline');
Route::get('admin/delete-bagi-pengetahuan/{id}', 'BeritaPengetahuanController@delete')->name('pengetahuan.delete');
Route::get('admin/preview-bagi-pengetahuan/{id}', 'BeritaPengetahuanController@preview')->name('pengetahuan.preview');


//Kategori Bagi Pengetahuan
Route::get('admin/kategori-bagi-pengetahuan', 'KategoriPengetahuanController@index')->name('pengetahuan.kategori.index');
Route::post('admin/store-kategori-bagi-pengetahuan', 'KategoriPengetahuanController@store')->name('pengetahuan.kategori.store');
Route::post('admin/edit-kategori-bagi-pengetahuan', 'KategoriPengetahuanController@edit')->name('pengetahuan.kategori.edit');
Route::get('admin/bind-kategori-bagi-pengetahuan/{id}', 'KategoriPengetahuanController@bind')->name('pengetahuan.kategori.bind');
Route::get('admin/delete-kategori-bagi-pengetahuan/{id}', 'KategoriPengetahuanController@delete')->name('pengetahuan.kategori.delete');
Route::get('admin/change-status-kategori-bagi-pengetahuan/{id}', 'KategoriPengetahuanController@changeflag')->name('pengetahuan.kategori.changeflag');
//========================================================================================================================


// =======================================================================================================================
//Management Akun
Route::get('admin/kelola-akun', 'AkunController@index')->name('akun.kelola');
Route::post('admin/store-akun', 'AkunController@store')->name('akun.store');
Route::post('admin/update-akun', 'AkunController@update')->name('akun.update');
Route::get('admin/delete-akun/{id}', 'AkunController@delete')->name('akun.delete');
Route::get('admin/bind-akun/{id}', 'AkunController@bind')->name('akun.bind');
Route::get('email-activation/{code}', 'AkunController@emailActivation');
Route::post('set-password', 'AkunController@setPassword')->name('setpassword');
Route::get('logout-process', 'AkunController@logoutProcess')->name('logout');
Route::post('login-process', 'AkunController@loginProcess')->name('login');
// =======================================================================================================================


// =======================================================================================================================
//Slider
Route::get('admin/kelola-slider', 'SliderController@index')->name('slider.index');
Route::post('admin/store-slider', 'SliderController@store')->name('slider.store');
Route::get('admin/delete-slider/{id}', 'SliderController@delete')->name('slider.delete');
Route::post('admin/edit-slider', 'SliderController@edit')->name('slider.edit');
Route::get('admin/publish-slider/{id}', 'SliderController@publish')->name('slider.publish');
Route::get('admin/bind-slider/{id}', 'SliderController@bind')->name('slider.bind');
// =======================================================================================================================


// =======================================================================================================================
//Galeri
Route::get('admin/kelola-galeri', 'GalleryController@index')->name('galeri.index');
Route::post('admin/store-galeri', 'GalleryController@store')->name('galeri.store');
Route::get('admin/delete-galeri/{id}', 'GalleryController@delete')->name('galeri.delete');
Route::post('admin/edit-galeri', 'GalleryController@edit')->name('galeri.edit');
Route::get('admin/publish-galeri/{id}', 'GalleryController@publish')->name('galeri.publish');
Route::get('admin/bind-galeri/{id}', 'GalleryController@bind')->name('galeri.bind');
// =======================================================================================================================


// =======================================================================================================================
//Video
Route::get('admin/kelola-video', 'VideoController@index')->name('video.index');
Route::post('admin/store-video', 'VideoController@store')->name('video.store');
Route::get('admin/delete-video/{id}', 'VideoController@delete')->name('video.delete');
Route::post('admin/edit-video', 'VideoController@edit')->name('video.edit');
Route::get('admin/publish-video/{id}', 'VideoController@publish')->name('video.publish');
Route::get('admin/bind-video/{id}', 'VideoController@bind')->name('video.bind');
// =======================================================================================================================


// =======================================================================================================================
//Profile
Route::get('admin/kelola-profile', 'UserProfileController@index')->name('profile.index');
Route::post('admin/edit-profile', 'UserProfileController@edit')->name('edit.profile.edit');
Route::get('admin/berita-user/{id}', 'UserProfileController@berita')->name('berita.user');
Route::post('admin/change-password', 'UserProfileController@changePassword')->name('change.password.user');
// =======================================================================================================================

////////////////////////////////////// END OF BACKEND ROUTE //////////////////////////////////////


///////////////////////////////////////// FRONTEND ROUTE /////////////////////////////////////////
