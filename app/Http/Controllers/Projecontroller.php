<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\Kullanici;
use App\Models\sepet;
use App\Models\Urunler;
use Illuminate\Support\Facades\DB;
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

           public function listt($id)
      {

          $veri=$id;
          $dataa=Urunler::whereId($veri)->first();
        //   dd($dataa);
        $bilgi2=Urunler::join("resimler","resimler.idd","urunler.resim")->where("urunler.id",$veri)->
        get(["resimler.resim1","resimler.resim2","resimler.resim3"]);
       $bilgi=Urunler::get();
          return view('single',compact('dataa','veri',"bilgi2","bilgi"));
        }
        public function liste()
        {
            $bilgi=Urunler::get();
            // dd($bilgi);
            return view('index',compact('bilgi'));
        }
        public function liste6()
        {
            $bilgi2=Urunler::join("resimler","resimler.id","urunler.resim")->get(["ogrenciler.*","resimler.resim1","resimler.resim2","resimler.resim3"]);

            return view('single',compact('bilgi2'));
        }
        public function urunekle(Request $request)
        {

            $dizi1=explode(",",$request->sepet);
        $dizi="";
        foreach ($dizi1 as $key => $value) {
            $dizi.="'".$value."',";
        }
        $dizi=substr($dizi,0,-1);
        //dd($request->sepet); $users = DB::table('users')


       // $data= DB::select('select * from urunler where id in ('.$dizi.')');
        $data["dz"]= DB::select('select distinct * from urunler inner join resimler ON resimler.idd=urunler.resim where id in ('.$dizi.')');
       // $users = DB::table('urunler')->whereIn('id', "$dizi")->get();
        // dd( $dizi1);
        $data["ddd"]=$dizi1;
          return view('checkout',$data);


        }

}

