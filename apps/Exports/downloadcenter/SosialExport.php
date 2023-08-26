<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class SosialExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_sosial')
        ->select(DB::raw('input_sosial.id,
        input_sosial.header_satu,
        input_sosial.header_dua,
        input_sosial.header_tiga,
        input_sosial.input,
        data_sosial.tahun,
        data_sosial.bentuk,
        data_sosial.jumlah,
        data_sosial.sumber'))
        ->leftjoin('data_sosial','data_sosial.kode','=','input_sosial.id')
        ->where('data_sosial.tahun',$tahun)
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
