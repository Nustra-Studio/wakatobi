<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class WangiExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }
    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_wangi')
        ->select(DB::raw('input_wangi.id,
        input_wangi.header_satu,
        input_wangi.header_dua,
        input_wangi.header_tiga,
        input_wangi.input,
        data_wangi.tahun,
        data_wangi.bentuk,
        data_wangi.jumlah,
        data_wangi.sumber'))
        ->leftjoin('data_wangi','data_wangi.kode','=','input_wangi.id')
        ->where('data_wangi.tahun',$tahun)
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
