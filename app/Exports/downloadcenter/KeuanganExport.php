<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KeuanganExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_keuangan')
        ->select(DB::raw('input_keuangan.id,
        input_keuangan.header_satu,
        input_keuangan.header_dua,
        input_keuangan.header_tiga,
        input_keuangan.input,
        data_keuangan.tahun,
        data_keuangan.bentuk,
        data_keuangan.jumlah,
        data_keuangan.sumber'))
        ->leftjoin('data_keuangan','data_keuangan.kode','=','input_keuangan.id')
        ->where('data_keuangan.tahun',$tahun)
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
