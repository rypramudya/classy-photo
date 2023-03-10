<?php


use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\reservasiController;






Route::get('/', function () {
    return view('welcome');
});


Route::get('/reservasi',[reservasiController::class]);



# routing untuk halaman list projects
Route::get('/antarmukareservasi', function () {
    return view('antarmuka.reservasi');
  });

  Route::get('/antarmukakelola', function () {
    return view('antarmuka.kelola');
  });
  

Route::get('/reservasi', [reservasiController::class,'index']);
Route::get('/reservasi/create', [reservasiController::class,'create']);
Route::post('/reservasi/store', [reservasiController::class,'store']);
Route::get('/reservasi/{id}/edit', [reservasiController::class,'edit']);
Route::put('/reservasi/{id}', [reservasiController::class,'update']);
Route::get('/reservasi/{id}', [reservasiController::class,'destroy']);




route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

route::group(['middleware'=> ['auth','ceklevel:admin,pelanggan']], function(){
    route::get('/home',[Homecontroller::class,'index'])->name('home');
});


