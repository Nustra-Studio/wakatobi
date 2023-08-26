<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PanganExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pangan')
        ->select(DB::raw('input_pangan.id,
        input_pangan.header_satu,
        input_pangan.header_dua,
        input_pangan.input,
        data_pangan.tahun,
        data_pangan.bentuk,
        data_pangan.jumlah,
        data_pangan.sumber'))
        ->leftjoin('data_pangan','data_pangan.kode','=','input_pangan.id')
        ->where('data_pangan.tahun',$tahun)
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
