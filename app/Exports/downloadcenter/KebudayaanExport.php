<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KebudayaanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_kebudayaan')
        ->select(DB::raw('input_kebudayaan.id,
        input_kebudayaan.header_satu,
        input_kebudayaan.header_dua,
        input_kebudayaan.header_tiga,
        input_kebudayaan.input,
        data_kebudayaan.tahun,
        data_kebudayaan.bentuk,
        data_kebudayaan.jumlah,
        data_kebudayaan.sumber'))
        ->leftjoin('data_kebudayaan','data_kebudayaan.kode','=','input_kebudayaan.id')
        ->where('data_kebudayaan.tahun',$tahun)
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
