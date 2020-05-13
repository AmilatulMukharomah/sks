<?php
/*
|--------------------------------------------------------------------------
| Page Controller
|--------------------------------------------------------------------------
|
| SCRIPT PUNYA ILA
| JANGAN DIAMBIL >:(
| J3D118160
|
*/
namespace App\Http\Controllers ; //mengenalkan tempatnya
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class PageController extends Controller 
{
    public function index(){
        return view('welcome');
    }
    public function tampilMhs(){
        return "halaman data mahasiswa";
    }
    public function barang(){
        return view('barang');
    }
    public function Data(Request $dataBarang){
        $validasi=$dataBarang->validate([ //data validasi berupa array
            'kode'=>'required',
            'nama'=>'required',
            'satuan'=>'required',
            'kategori'=>'required',
            'beli'=>'required',
            'jual'=>'required',
            'stok'=>'required',
            'diskon'=>'required'
        ]);
    return view('Data', compact('dataBarang'));
    }

       public function transaksi(){
        return view('transaksi');
    }

    public function Struk(Request $dataTransaksi){
        $validasi=$dataTransaksi->validate([
            'barang1'=>'required',
            'barang2'=>'required',
            'barang3'=>'required',
            'harga1'=>'required',
            'harga2'=>'required',
            'harga3'=>'required',
            'jumlah1'=>'required',
            'jumlah2'=>'required',
            'jumlah3'=>'required',
            'diskon'=>'required'
        ]);

    $total1 = ($dataTransaksi->harga1 * $dataTransaksi->jumlah1);
    $total2 = ($dataTransaksi->harga2 * $dataTransaksi->jumlah2);
    $total3 = ($dataTransaksi->harga3 * $dataTransaksi->jumlah3);
    $totalT = ($total1+$total2+$total3);
    $totalD = ($dataTransaksi->diskon / 100 )* $totalT;
    $totalB = ($totalT - $totalD);

    return view('hitung', compact('dataTransaksi','total1','total2','total3','totalT','totalD','totalB'));
    }

}

