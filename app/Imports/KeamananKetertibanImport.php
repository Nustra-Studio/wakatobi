<?php

namespace App\Imports;
use Illuminate\Support\Collection;
use App\models\backend\KeamananKetertibanModel;
use Maatwebsite\Excel\Concerns\ToCollection;
use DB;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class KeamananKetertibanImport implements ToCollection, WithHeadingRow
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $row){
            $tahun=$row['tahun'];
            $kode = $row['kode'];
            $data = KeamananKetertibanModel::firstOrNew(['kode' => $kode,'tahun'=>$tahun]);
            $data->kode = $row['kode'];
            $data->tahun = $row['tahun'];
            $data->jumlah = $row['jumlah'];
            $data->sumber = $row['sumber_data'];
            $data->bentuk = $row['bentuk'];
            $data->tanggal = date('Y-m-d H:i:s');
            $data->save();
    }
    }
}