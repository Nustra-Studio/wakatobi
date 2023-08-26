<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KaledupaExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_kaledupa')
        ->select(DB::raw('input_kaledupa.id,
        input_kaledupa.header_satu,
        input_kaledupa.header_dua,
        input_kaledupa.header_tiga,
        input_kaledupa.input,
        data_kaledupa.tahun,
        data_kaledupa.bentuk,
        data_kaledupa.jumlah,
        data_kaledupa.sumber'))
        ->leftjoin('data_kaledupa','data_kaledupa.kode','=','input_kaledupa.id')
        ->where('data_kaledupa.tahun',$tahun)
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
