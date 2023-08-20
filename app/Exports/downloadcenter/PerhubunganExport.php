<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerhubunganExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_perhubungan')
        ->select(DB::raw('input_perhubungan.id,
        input_perhubungan.header_satu,
        input_perhubungan.header_dua,
        input_perhubungan.header_tiga,
        input_perhubungan.input,
        data_perhubungan.tahun,
        data_perhubungan.bentuk,
        data_perhubungan.jumlah,
        data_perhubungan.sumber'))
        ->leftjoin('data_perhubungan','data_perhubungan.kode','=','input_perhubungan.id')
        ->where('data_perhubungan.tahun',$tahun)
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
