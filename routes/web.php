<?php
use App\Http\Controllers\Projecontroller;
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
    return view('index');
});

Route::view('kayit','kayit')->middleware("kullanicioturum");
Route::view('giris','giris')->middleware("kullanicioturum");
Route::view('index','index');
Route::view('contact','contact');
Route::view('checkout','checkout');
Route::view('products','products');
Route::view('single','single');
Route::view('typo','typo');

Route::post('kayit',[Projecontroller::class,'kullaniciekle']);
Route::post('giris',[Projecontroller::class,'kullanicigiris'])->name("kullhome");
Route::get('index', [Projecontroller::class, 'kullanasayfa'])->name("kullanasay");
Route::get('kullcikis',[Projecontroller::class,'kullcikis']);



