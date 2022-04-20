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
Route::view('siparis','siparis')->name("siparis");

Route::view('adminana','adminana')->name("adminhome")->middleware("admin");
Route::view('admingiris','admingiris')->middleware("adminkontrol");
Route::view('adminekle','adminekle')->middleware("admin");
Route::view('adminkul','adminkul')->middleware("admin");
Route::view('adminsip','adminsip')->middleware("admin");

Route::post('kayit',[Projecontroller::class,'kullaniciekle']);
Route::post('giris',[Projecontroller::class,'kullanicigiris'])->name("kullhome");
Route::get('index', [Projecontroller::class, 'kullanasayfa'])->name("kullanasay");
Route::get('kullcikis',[Projecontroller::class,'kullcikis'])->name("kullcikis");
Route::get('index',[Projecontroller::class,'liste'])->name("home");
Route::get('products',[Projecontroller::class,'liste2'])->name("products");
Route::get('single/{id}',[Projecontroller::class,'listt']);
Route::get('checkout',[Projecontroller::class,'urunekle'])->name("checkout");
Route::post('checkout',[Projecontroller::class,'siparisekle']);
Route::get('siparis',[Projecontroller::class,'listee'])->name("siparis");

Route::post('admingiris',[Projecontroller::class,'admingiris'])->name("adminhome")->middleware("adminkontrol");
Route::get('adminana', [Projecontroller::class, 'adminanasayfa'])->name("adminanasay")->middleware("admin");
Route::get('admincikis',[Projecontroller::class,'admincikis'])->name("admincikis");

Route::post('adminekle',[Projecontroller::class,'uruneklee'])->middleware("admin");
Route::get('adminkul',[Projecontroller::class,'liste3'])->name("adminkul")->middleware("admin");
Route::get('adminsip',[Projecontroller::class,'liste4'])->name("adminsip")->middleware("admin");
Route::get('adminurun',[Projecontroller::class,'liste5'])->name("adminurun")->middleware("admin");

Route::get('onayla/{id}',[Projecontroller::class,'guncelle'])->middleware("admin");
Route::get('sil/{id}',[Projecontroller::class,'sil'])->middleware("admin");
Route::post('adminurungun',[Projecontroller::class,'guncelled'])->name("guncel")->middleware("admin");
Route::post('contact',[Projecontroller::class,'gonder']);



