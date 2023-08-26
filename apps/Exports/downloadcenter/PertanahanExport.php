<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PertanahanExport implements FromCollection,ShouldAutoSize,WithHeadings{
    

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pertanahan')
        ->select(DB::raw('input_pertanahan.id,
        input_pertanahan.header_satu,
        input_pertanahan.input,
        data_pertanahan.tahun,
        data_pertanahan.bentuk,
        data_pertanahan.jumlah,
        data_pertanahan.sumber'))
        ->leftjoin('data_pertanahan','data_pertanahan.kode','=','input_pertanahan.id')
        ->where('data_pertanahan.tahun',$tahun)
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
