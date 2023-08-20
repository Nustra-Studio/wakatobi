<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class GeografisExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_geografis')
        ->select(DB::raw('input_geografis.id,
        input_geografis.header_satu,
        input_geografis.header_dua,
        input_geografis.input,
        data_geografis.tahun,
        data_geografis.bentuk,
        data_geografis.jumlah,
        data_geografis.sumber'))
        ->leftjoin('data_geografis','data_geografis.kode','=','input_geografis.id')
        ->where('data_geografis.tahun',$tahun)
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
