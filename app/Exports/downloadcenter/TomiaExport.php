<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class TomiaExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_tomia')
        ->select(DB::raw('input_tomia.id,
        input_tomia.header_satu,
        input_tomia.header_dua,
        input_tomia.header_tiga,
        input_tomia.input,
        data_tomia.tahun,
        data_tomia.bentuk,
        data_tomia.jumlah,
        data_tomia.sumber'))
        ->leftjoin('data_tomia','data_tomia.kode','=','input_tomia.id')
        ->where('data_tomia.tahun',$tahun)
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
