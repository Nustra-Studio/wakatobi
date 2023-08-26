<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerpustakaanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_perpustakaan')
        ->select(DB::raw('input_perpustakaan.id,
        input_perpustakaan.header_satu,
        input_perpustakaan.header_dua,
        input_perpustakaan.header_tiga,
        input_perpustakaan.header_empat,
        input_perpustakaan.input,
        data_perpustakaan.tahun,
        data_perpustakaan.bentuk,
        data_perpustakaan.jumlah,
        data_perpustakaan.sumber'))
        ->leftjoin('data_perpustakaan','data_perpustakaan.kode','=','input_perpustakaan.id')
        ->where('data_perpustakaan.tahun',$tahun)
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
