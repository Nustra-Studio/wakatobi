<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KeamananKetertibanExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_keamanan_ketertiban')
        ->select(DB::raw('input_keamanan_ketertiban.id,
        input_keamanan_ketertiban.header_satu,
        input_keamanan_ketertiban.header_dua,
        input_keamanan_ketertiban.header_tiga,
        input_keamanan_ketertiban.input,
        data_keamanan_ketertiban.tahun,
        data_keamanan_ketertiban.bentuk,
        data_keamanan_ketertiban.jumlah,
        data_keamanan_ketertiban.sumber'))
        ->leftjoin('data_keamanan_ketertiban','data_keamanan_ketertiban.kode','=','input_keamanan_ketertiban.id')
        ->where('data_keamanan_ketertiban.tahun',$tahun)
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
