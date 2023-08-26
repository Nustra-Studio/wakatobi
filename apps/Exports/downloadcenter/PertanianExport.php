<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PertanianExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pertanian')
        ->select(DB::raw('input_pertanian.id,
        input_pertanian.header_satu,
        input_pertanian.header_dua,
        input_pertanian.input,
        data_pertanian.tahun,
        data_pertanian.bentuk,
        data_pertanian.jumlah,
        data_pertanian.sumber'))
        ->leftjoin('data_pertanian','data_pertanian.kode','=','input_pertanian.id')
        ->where('data_pertanian.tahun',$tahun)
        ->get();
        return $data;
    }

    public function headings(): array
    {
        return [
            'kode',
            'Header Satu',
            'Header Dua',
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
