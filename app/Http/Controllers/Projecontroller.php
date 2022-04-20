<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Kullanici;
use App\Models\Resimler;
use App\Models\sepet;
use App\Models\Urunler;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
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
        $data["ddd"]=$dizi1;// dd($data);
          return view('checkout',$data);


        }

        public function siparisekle(Request $request)
        {


            $gelen=explode(",",$request->sepet);


$sayac=0;
$sayac1=0;
$sayac2=0;
$tarih=time();
if(session()->get('kull')==null)
$kull=1;
else
$kull=session()->get('kull')->id;

//dd($kull);
            foreach ($gelen as $key => $value) {
                if($value=="1"&&$sayac==0){
                sepet::create
                (["mus_id"=>$kull,"urun_id"=>$value,
                "adet"=>$request->a,"adres"=>$request->address,"tarih"=>$tarih]);
                $sayac++;
                $dataa=Urunler::where("id",$value)->first();
                $deger=0;
                $deger=($dataa->stok)-$request->a;
                Urunler::where('id',$value)->update(["stok"=>$deger]);
            }
          else  if($value=="2"&&$sayac1==0){
                sepet::create
                (["mus_id"=>$kull,"urun_id"=>$value,
                "adet"=>$request->b,"adres"=>$request->address,"tarih"=>"27.08.2001"]);
                $sayac1++;
                $dataa=Urunler::where("id",$value)->first();
                $deger=0;
                $deger=($dataa->stok)-$request->b;
                Urunler::where('id',$value)->update(["stok"=>$deger]);
            }
            else  if($value=="3"&&$sayac2==0){
                sepet::create
                (["mus_id"=>$kull,"urun_id"=>$value,
                "adet"=>$request->c,"adres"=>$request->address,"tarih"=>"27.08.2001"]);
                $sayac2++;
                $dataa=Urunler::where("id",$value)->first();
                $deger=0;
                $deger=($dataa->stok)-$request->c;
                Urunler::where('id',$value)->update(["stok"=>$deger]);
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


        public function admingiris(Request $request)
        {


            $request->validate([
                "eposta" => "required",
                "sifre" => "required"
            ]);

            $dataa=Admin::where("eposta","=",$request->eposta)->first();
           // dd($dataa);
            if($dataa)
            {
                if(Hash::check($request->sifre,$dataa->sifre))
                { //dd($dataa->sifre);
                Session()->put('admin',$dataa);

                return redirect()->route('adminanasay');
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
          public function adminanasayfa()
          {



              return view('adminana');

            }
            public function admincikis()
            {


                if(Session::has("admin"))
                {
                    Session::pull("admin");
                    return redirect("admingiris");
                }
              }
              public function uruneklee(Request $request)
              {
                $request->validate([
                    'file' => 'required|max:2048'],
                    ['file.required'=>'Fotoğraf eksik.' ]);
                $id=rand(10,1000);
                $idd=rand(10,1000);
                $fileName = time().'.'.$request->file->extension();
                $fileName1 = time().'.'.$request->file1->extension();
                $fileName2 = time().'.'.$request->file2->extension();
                $fileName3 = time().'.'.$request->file3->extension();

               // dd($fileName);
                $request->file->move(public_path('images'), $fileName);
                $request->file1->move(public_path('images'), $fileName1);
                $request->file2->move(public_path('images'), $fileName2);
                $request->file3->move(public_path('images'), $fileName3);
                //dd($idd);
                Resimler::create
                (["idd"=>"$idd","resim1"=>"images/".$fileName1,"resim2"=>"images/".$fileName2,"resim3"=>"images/".$fileName3]);

                  Urunler::create
                  (["id"=>"$id","urun_adi"=>$request->urun_adi,"stok"=>$request->stok,"renk"=>$request->renk,"fiyat"=>$request->fiyat,"aciklama"=>$request->aciklama,
                  "anaresim"=>"images/".$fileName,"resim"=>$idd]);

                 return redirect('adminekle');


              }
              public function liste3()
              {
                  $bilgi=Kullanici::get();
                  // dd($bilgi);
                  return view('adminkul',compact('bilgi'));
              }
              public function liste4()
              {
            $bilgi2=sepet:: join("kullanici","kullanici.id","sepet.mus_id")->
            join("urunler","sepet.urun_id","urunler.id")->
            get(["sepet.*","kullanici.*","urunler.*"]);
             //  dd($bilgi2);
                  return view('adminsip',compact('bilgi2'));
              }

              public function liste5()
              {
                  $bilgi2=Urunler::get();
                  // dd($bilgi);
                  return view('adminurun',compact('bilgi2'));
              }

              public function sil($id)
              {
                  $veri=$id;
                  Urunler::whereId($veri)->delete();

              return redirect('adminurun');

                }
                public function guncelle($id)
              {

                  $veri=$id;
                  $dataa=Urunler::whereId($veri)->first();

                  return view('adminurungun',compact('dataa','veri'));

                }
                public function guncelled(Request $request)
                {
                    $fileName = time().'.'.$request->file->extension();
                    $request->file->move(public_path('images'), $fileName);

                  Urunler::where('id',$request->id)->update(["urun_adi"=>$request->urun_adi, "anaresim"=>"images/".$fileName,"stok"=>$request->stok,
                  "renk"=>$request->renk,
                 "fiyat"=>$request->fiyat,
                  "aciklama"=>$request->aciklama]);
                   return redirect()->route('adminanasay');

                  }

                  public function gonder(Request $request)
                  {

                      $array['email1']=$request->email;
                      $array['email']="hasan.ayvat4@gmail.com";
                      $array['name']=$request->name;
                      $array['telefon']=$request->telefon;
                      $array['mesaj']=$request->mesaj;
                      Mail::send('iletisim', $array, function ($message) use ($array) {
                          $message->subject("İLETİŞİM FORMU");
                          $message->to($array['email']); });

                            return back();
                  }

}

