<?php
use App\Http\Controllers\Projecontroller;
use App\Models\Urunler;
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
    $bilgi=Urunler::get();
    // dd($bilgi);
    return view('index',compact('bilgi'));
});

Route::view('kayit','kayit')->middleware("kullanicioturum");
Route::view('giris','giris')->middleware("kullanicioturum");
Route::view('index','index');
Route::view('contact','contact')->name("contact");
Route::view('checkout','checkout')->name("checkout");
Route::view('products','products')->name("products");
Route::view('single','single')->name("single");
Route::view('typo','typo')->name("typo");

Route::view('adminana','adminana');
Route::view('admingiris','admingiris');
Route::view('adminekle','adminekle');
Route::view('adminkul','adminkul');
Route::view('adminsip','adminsip');

Route::post('kayit',[Projecontroller::class,'kullaniciekle']);
Route::post('giris',[Projecontroller::class,'kullanicigiris'])->name("kullhome");
Route::get('index', [Projecontroller::class, 'kullanasayfa'])->name("kullanasay");
Route::get('kullcikis',[Projecontroller::class,'kullcikis'])->name("kullcikis");
Route::get('index',[Projecontroller::class,'liste'])->name("home");
Route::get('single/{id}',[Projecontroller::class,'listt']);
Route::get('checkout',[Projecontroller::class,'urunekle'])->name("checkout");



