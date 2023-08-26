<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class WangiselatanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }
    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_wangiselatan')
        ->select(DB::raw('input_wangiselatan.id,
        input_wangiselatan.header_satu,
        input_wangiselatan.header_dua,
        input_wangiselatan.header_tiga,
        input_wangiselatan.input,
        data_wangiselatan.tahun,
        data_wangiselatan.bentuk,
        data_wangiselatan.jumlah,
        data_wangiselatan.sumber'))
        ->leftjoin('data_wangiselatan','data_wangiselatan.kode','=','input_wangiselatan.id')
        ->where('data_wangiselatan.tahun',$tahun)
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
