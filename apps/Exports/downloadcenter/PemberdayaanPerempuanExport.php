<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PemberdayaanPerempuanExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pemberdayaan_perempuan')
        ->select(DB::raw('input_pemberdayaan_perempuan.id,
        input_pemberdayaan_perempuan.header_satu,
        input_pemberdayaan_perempuan.header_dua,
        input_pemberdayaan_perempuan.header_tiga,
        input_pemberdayaan_perempuan.header_empat,
        input_pemberdayaan_perempuan.header_lima,
        input_pemberdayaan_perempuan.header_enam,
        input_pemberdayaan_perempuan.input,
        data_pemberdayaan_perempuan.tahun,
        data_pemberdayaan_perempuan.bentuk,
        data_pemberdayaan_perempuan.jumlah,
        data_pemberdayaan_perempuan.sumber'))
        ->leftjoin('data_pemberdayaan_perempuan','data_pemberdayaan_perempuan.kode','=','input_pemberdayaan_perempuan.id')
        ->where('data_pemberdayaan_perempuan.tahun',$tahun)
        ->get();
        return $data;
    }

    public function headings(): array
    {
        return [
            'kode',
            'Header Satu',
            'Header Dua',
            'Header Tiga',
            'Header Empat',
            'Header Lima',
            'Header Enam',
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
