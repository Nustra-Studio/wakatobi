<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class EnergisumberdayaExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_energi_sumberdaya')
        ->select(DB::raw('input_energi_sumberdaya.id,
        input_energi_sumberdaya.header_satu,
        input_energi_sumberdaya.header_dua,
        input_energi_sumberdaya.header_tiga,
        input_energi_sumberdaya.input,
        data_energi_sumberdaya.tahun,
        data_energi_sumberdaya.bentuk,
        data_energi_sumberdaya.jumlah,
        data_energi_sumberdaya.sumber'))
        ->leftjoin('data_energi_sumberdaya','data_energi_sumberdaya.kode','=','input_energi_sumberdaya.id')
        ->where('data_energi_sumberdaya.tahun',$tahun)
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
