<?php

use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
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
 

Route::controller(LandingController::class)->group(function () {
	Route::get( '/', 'index')->name('landing.index');
	Route::get('tentang', 'tentang')->name('landing.tentang');
	Route::get('produk', 'produk')->name('landing.produk');
	Route::get('kontak', 'kontak')->name('landing.kontak');
	Route::post('actaddpengguna','actaddpengguna')->name('landing.actdtpengguna');
	Route::get('artikelall', 'artikelall')->name('landing.artikelall');

});

Route::controller(PostController::class)->group(function () {
Route::get('detailpostview/{id}', 'detailpostview')->name('post.artikeldetail');
//-Sitemap-//
Route::get('sitemap.xml', 'sitemaps')->name('post.sitemaps');
});

Route::controller(AuthController::class)->group(function () {
	Route::get('login', 'login')->name('login');
	Route::post('login', 'loginAksi')->name('login.aksi');
	Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

Route::middleware('auth')->group(function () {
	Route::get('dashboards', function () {
        return view('dashboard.index');
    })->name('dashboards');

	Route::controller(PostController::class)->prefix('post')->group(function () {
		//--------------Route Banner--------------// 
		Route::get('addbanner','addbanner')->name('post.addbanner');
		Route::get('dtbanner','dtbanner')->name('post.dtbanner');
		Route::post('actaddbanner','actaddbanner')->name('post.actdtbanner');
		Route::get('deletebanner/{id}', 'deletebanner')->name('post.deletebanner');
		Route::get('editbanner/{id}', 'editbannerview')->name('post.editbanner');
		Route::post('editbanner/{id}', 'editbannerupdate')->name('post.acteditbanner');

		//--------------Route Kegiatan--------------// 
		Route::get('addkegiatan','addkegiatan')->name('post.addkegiatan');
		Route::get('dtkegiatan','dtkegiatan')->name('post.dtkegiatan');
		Route::post('actaddkegiatan','actaddkegiatan')->name('post.actdtkegiatan');
		Route::get('deletekegiatan/{id}', 'deletekegiatan')->name('post.deletekegiatan');
		Route::get('editkegiatan/{id}', 'editkegiatanview')->name('post.editkegiatan');
		Route::post('editkegiatan/{id}', 'editkegiatanupdate')->name('post.acteditkegiatan');
		
		//--------------Route Paket--------------// 
		Route::get('addpaket','addpaket')->name('post.addpaket');
		Route::get('dtpaket','dtpaket')->name('post.dtpaket');
		Route::post('actaddpaket','actaddpaket')->name('post.actdtpaket');
		Route::get('deletepaket/{id}', 'deletepaket')->name('post.deletepaket');
		Route::get('editpaket/{id}', 'editpaketview')->name('post.editpaket');
		Route::post('editpaket/{id}', 'editpaketupdate')->name('post.acteditpaket');

		//--------------Route Artikel--------------// 
		Route::get('addpost','addpost')->name('post.addpost');
		Route::get('dtpost','dtpost')->name('post.dtpost');
		Route::post('actaddpost','actaddpost')->name('post.actdtpost');
		Route::get('deletepost/{id}', 'deletepost')->name('post.deletepost');
		Route::get('editpost/{id}', 'editpostview')->name('post.editpost');
		Route::post('editpost/{id}', 'editpostupdate')->name('post.acteditpost');
		

        //--------------Route Produk--------------// 
		Route::get('addproduk','addproduk')->name('post.addproduk');
		Route::get('dtproduk','dtproduk')->name('post.dtproduk');
		Route::post('actaddproduk','actaddproduk')->name('post.actdtproduk');
		Route::get('deleteproduk/{id}', 'deleteproduk')->name('post.deleteproduk');
		Route::get('editproduk/{id}', 'editprodukview')->name('post.editproduk');
		Route::post('editproduk/{id}', 'editprodukupdate')->name('post.acteditproduk');

        //--------------Route User--------------// 
        Route::get('adduser','adduser')->name('post.adduser');
		Route::get('dtuser','dtuser')->name('post.dtuser');
		Route::post('actadduser','actadduser')->name('post.actdtuser');
		Route::get('deleteuser/{id}', 'deleteuser')->name('post.deleteuser');
		Route::get('edituser/{id}', 'edituserview')->name('post.edituser');
		Route::post('edituser/{id}', 'edituserupdate')->name('post.actedituser');

		//--------------Route User--------------// 
		Route::get('dtpengguna','dtpengguna')->name('post.dtpengguna');

		//--------------Route Admin-------------// 
		Route::get('actviewuser','actviewuser')->name('post.actviewuser');
		Route::post('actupdateuser/{id}','actupdateuser')->name('post.actupdateuser');

	});

	
});