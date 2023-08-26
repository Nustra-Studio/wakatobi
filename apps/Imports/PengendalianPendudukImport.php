<?php

namespace App\Imports;
use Illuminate\Support\Collection;
use App\models\backend\PengendalianPendudukModel;
use App\models\backend\RangkingModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class PengendalianPendudukImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        $tahunnya = '';
        foreach ($collection as $row){
            $tahun=$row['tahun'];
            $kode = $row['kode'];
            $data = PengendalianPendudukModel::firstOrNew(['kode' => $kode,'tahun'=>$tahun]);
            $data->kode = $row['kode'];
            $data->tahun = $row['tahun'];
            $data->jumlah = $row['jumlah'];
            $data->sumber = $row['sumber_data'];
            $data->bentuk = $row['bentuk'];
            $data->tanggal = date('Y-m-d H:i:s');
            $data->save();
    }
    $jumlahdata = DB::table('input_pengendalian_penduduk')->count();
    $jumlahdiisi = DB::table('data_pengendalian_penduduk')->where([['tahun',$tahunnya],['jumlah','!=',0]])->count();
    $namafile = 'Data Pengendalian penduduk dan KB';
    $pj = 'DPPKB';
    $data = RangkingModel::firstOrNew(['nama_file' => $namafile,'tahun'=>$tahunnya]);
    $data->nama_file = $namafile;
    $data->total = $jumlahdata;
    $data->diisi = $jumlahdiisi;
    $data->presentase = floor(($jumlahdiisi/$jumlahdata)*100);
    $data->tahun = $tahunnya;
    $data->tanggal = date('Y-m-d');
    $data->pj=$pj;
    $data->save();
    }
}