<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KoperasiExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_koperasi')
        ->select(DB::raw('input_koperasi.id,
        input_koperasi.header_satu,
        input_koperasi.header_dua,
        input_koperasi.header_tiga,
        input_koperasi.header_empat,
        input_koperasi.input,
        data_koperasi.tahun,
        data_koperasi.bentuk,
        data_koperasi.jumlah,
        data_koperasi.sumber'))
        ->leftjoin('data_koperasi','data_koperasi.kode','=','input_koperasi.id')
        ->where('data_koperasi.tahun',$tahun)
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
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
