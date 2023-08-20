<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KesehatanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_kesehatan')
        ->select(DB::raw('input_kesehatan.id,
        input_kesehatan.header_satu,
        input_kesehatan.header_dua,
        input_kesehatan.header_tiga,
        input_kesehatan.header_empat,
        input_kesehatan.input,
        data_kesehatan.tahun,
        data_kesehatan.bentuk,
        data_kesehatan.jumlah,
        data_kesehatan.sumber'))
        ->leftjoin('data_kesehatan','data_kesehatan.kode','=','input_kesehatan.id')
        ->where('data_kesehatan.tahun',$tahun)
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
            'Header Empat',
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
