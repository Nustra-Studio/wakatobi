<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PariwisataExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pariwisata')
        ->select(DB::raw('input_pariwisata.id,
        input_pariwisata.header_satu,
        input_pariwisata.header_dua,
        input_pariwisata.input,
        data_pariwisata.tahun,
        data_pariwisata.bentuk,
        data_pariwisata.jumlah,
        data_pariwisata.sumber'))
        ->leftjoin('data_pariwisata','data_pariwisata.kode','=','input_pariwisata.id')
        ->where('data_pariwisata.tahun',$tahun)
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
