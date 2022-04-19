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

            return redirect()->route('home');
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
        public function liste2()
        {
            $bilgi=Urunler::get();
            // dd($bilgi);
            return view('products',compact('bilgi'));
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

        public function siparisekle(Request $request)
        {


            $gelen=explode(",",$request->sepet);


$sayac=0;
$sayac1=0;
$sayac2=0;
if(session()->get('kull')==null)
$kull=1;
else
$kull=session()->get('kull')->id;
//dd($kull);
            foreach ($gelen as $key => $value) {
                if($value=="1"&&$sayac==0){
                sepet::create
                (["mus_id"=>$kull,"urun_id"=>$value,
                "adet"=>$request->a,"adres"=>$request->address,"tarih"=>"27.08.2001"]);
                $sayac++;
            }
          else  if($value=="2"&&$sayac1==0){
                sepet::create
                (["mus_id"=>$kull,"urun_id"=>$value,
                "adet"=>$request->b,"adres"=>$request->address,"tarih"=>"27.08.2001"]);
                $sayac1++;
            }
            else  if($value=="3"&&$sayac2==0){
                sepet::create
                (["mus_id"=>$kull,"urun_id"=>$value,
                "adet"=>$request->c,"adres"=>$request->address,"tarih"=>"27.08.2001"]);
                $sayac2++;
            }

            }



           return redirect(route('home'));


        }
        public function listee()
        {
            if(session()->get('kull')==null)
            $kull=1;
            else
            $kull=session()->get('kull')->id;

            $bilgi2=Kullanici:: join("sepet","kullanici.id","sepet.mus_id")->where("kullanici.id",$kull)->
            join("urunler","sepet.urun_id","urunler.id")->
            get(["sepet.*","kullanici.*","urunler.*"]);
           // dd($bilgi2);
            return view('siparis',compact('bilgi2'));
        }

}

