<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerumahanRakyatExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_perumahan_rakyat')
        ->select(DB::raw('input_perumahan_rakyat.id,
        input_perumahan_rakyat.header_satu,
        input_perumahan_rakyat.header_dua,
        input_perumahan_rakyat.header_tiga,
        input_perumahan_rakyat.input,
        data_perumahan_rakyat.tahun,
        data_perumahan_rakyat.bentuk,
        data_perumahan_rakyat.jumlah,
        data_perumahan_rakyat.sumber'))
        ->leftjoin('data_perumahan_rakyat','data_perumahan_rakyat.kode','=','input_perumahan_rakyat.id')
        ->where('data_perumahan_rakyat.tahun',$tahun)
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
