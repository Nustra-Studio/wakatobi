<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerindustrianExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_perindustrian')
        ->select(DB::raw('input_perindustrian.id,
        input_perindustrian.header_satu,
        input_perindustrian.header_dua,
        input_perindustrian.input,
        data_perindustrian.tahun,
        data_perindustrian.bentuk,
        data_perindustrian.jumlah,
        data_perindustrian.sumber'))
        ->leftjoin('data_perindustrian','data_perindustrian.kode','=','input_perindustrian.id')
        ->where('data_perindustrian.tahun',$tahun)
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
