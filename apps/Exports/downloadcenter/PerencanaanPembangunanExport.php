<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerencanaanPembangunanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_perencanaan_pembangunan')
        ->select(DB::raw('input_perencanaan_pembangunan.id,
        input_perencanaan_pembangunan.header_satu,
        input_perencanaan_pembangunan.input,
        data_perencanaan_pembangunan.tahun,
        data_perencanaan_pembangunan.bentuk,
        data_perencanaan_pembangunan.jumlah,
        data_perencanaan_pembangunan.sumber'))
        ->leftjoin('data_perencanaan_pembangunan','data_perencanaan_pembangunan.kode','=','input_perencanaan_pembangunan.id')
        ->where('data_perencanaan_pembangunan.tahun',$tahun)
        ->get();
        return $data;
    }

    public function headings(): array
    {
        return [
            'kode',
            'Header Satu',
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
