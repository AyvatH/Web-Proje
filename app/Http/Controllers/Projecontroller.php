<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Kullanici;
use Illuminate\Support\Facades\Session;




use Illuminate\Http\Request;

class Projecontroller extends Controller
{
    public function kullaniciekle(Request $request)
    {
       // dd($request->all());
        Kullanici::create
        (["ad"=>$request->ad,"soyad"=>$request->soyad,
        "eposta"=>$request->eposta,
        "sifre"=>bcrypt($request->sifre),"tel"=>$request->tel]);
        return redirect('giris');


    }
    public function kullanicigiris(Request $request)
    {


        $request->validate([
            "eposta" => "required",
            "sifre" => "required"
        ]);

        $dataa=Kullanici::where("eposta","=",$request->eposta)->first();
       // dd($dataa);
        if($dataa)
        {
//             $pw ="123";

//  $hashed = Hash::make($pw);
//  dd ( Hash::check($request->sifre,$hashed));
//  Hash::check($pw, $dataa->sifre);

            if(Hash::check($request->sifre,$dataa->sifre))
            {// dd($dataa->sifre);
            Session()->put('kull',$dataa);

            return redirect(route("kullanasay"));
            }
            else
        {
            dd("hata");
            print_r("hata sifre");
            return back()->with("Hata","Yanlış şifre girdiniz!");
        }

        }
        else
        {
            print_r("hata no");
            return back()->with("Hata","Yanlış numara girdiniz!");
        }



      }
      public function kullanasayfa()
      {



          return view('index');

        }
        public function kullcikis()
        {


            if(Session::has("kull"))
            {
                Session::pull("kull");
                return redirect("giris");
            }
          }

}
