<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;


class PekerjaanUmumExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pekerjaan_umum')
        ->select(DB::raw('input_pekerjaan_umum.id,
        input_pekerjaan_umum.header_satu,
        input_pekerjaan_umum.header_dua,
        input_pekerjaan_umum.header_tiga,
        input_pekerjaan_umum.input,
        data_pekerjaan_umum.tahun,
        data_pekerjaan_umum.bentuk,
        data_pekerjaan_umum.jumlah,
        data_pekerjaan_umum.sumber'))
        ->leftjoin('data_pekerjaan_umum','data_pekerjaan_umum.kode','=','input_pekerjaan_umum.id')
        ->where('data_pekerjaan_umum.tahun',$tahun)
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
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
