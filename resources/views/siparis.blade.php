<!DOCTYPE html>
<html>
<head>
    <style>
        #kul {
        border-collapse: collapse;
        width: 100%;
        }

        #kul td, #kul th {
        border: 1px solid #ddd;
        padding: 8px;
        }

        #kul tr:nth-child(even){background-color: #f2f2f2;}

        #kul tr:hover {
        background-color: #2ecc71;
        color:#fff;
        }

        #kul th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #2c3e50;
        color: white;
        }
        </style>
@include('header');
<br><br><br><br><br>
        <div class="table-responsive">
            <table  id="kul">
                <thead>
                    <tr>
                        <th>Adı</th>
                        <th>Soyadı</th>
                        <th>Ürün Adı</th>
                        <th>Adet</th>
                        <th>Fiyat</th>
                        <th>Adres</th>
                    </tr>
                </thead>
                {{-- <tbody >

                    @forelse ($bilgi2 as $key2 => $val2)
                    <input  type="hidden" class="form-control" name="kad"  {{ $akey2=$val2 ['id']}} placeholder="Kullanıcı Adı">

                    <tr>
                        <td>{{  session()->get('kull')->ad}}</td>
                        <td>{{ session()->get('kull')->soyad }}</td>
                        <td>{{ session()->get('kull')->no }}</td>
                         <td>{{ $veri2}}</td>
                         <td>{{ $val2 ["durum"]}}</td>
                      </tr>
        @empty
        <tr>
            <td colspan="4">Veri bulunamadı</td>
        </tr>
        @endforelse


        </tbody> --}}
            </table>
        </div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        @include('footer');
