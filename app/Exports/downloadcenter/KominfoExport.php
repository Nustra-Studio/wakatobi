<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KominfoExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_kominfo')
        ->select(DB::raw('input_kominfo.id,
        input_kominfo.header_satu,
        input_kominfo.header_dua,
        input_kominfo.header_tiga,
        input_kominfo.input,
        data_kominfo.tahun,
        data_kominfo.bentuk,
        data_kominfo.jumlah,
        data_kominfo.sumber'))
        ->leftjoin('data_kominfo','data_kominfo.kode','=','input_kominfo.id')
        ->where('data_kominfo.tahun',$tahun)
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
