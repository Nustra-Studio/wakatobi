<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PengendalianPendudukExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pengendalian_penduduk')
        ->select(DB::raw('input_pengendalian_penduduk.id,
        input_pengendalian_penduduk.header_satu,
        input_pengendalian_penduduk.header_dua,
        input_pengendalian_penduduk.header_tiga,
        input_pengendalian_penduduk.input,
        data_pengendalian_penduduk.tahun,
        data_pengendalian_penduduk.bentuk,
        data_pengendalian_penduduk.jumlah,
        data_pengendalian_penduduk.sumber'))
        ->leftjoin('data_pengendalian_penduduk','data_pengendalian_penduduk.kode','=','input_pengendalian_penduduk.id')
        ->where('data_pengendalian_penduduk.tahun',$tahun)
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
