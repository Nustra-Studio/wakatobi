<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KehutananExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_kehutanan')
        ->select(DB::raw('input_kehutanan.id,
        input_kehutanan.header_satu,
        input_kehutanan.header_dua,
        input_kehutanan.input,
        data_kehutanan.tahun,
        data_kehutanan.bentuk,
        data_kehutanan.jumlah,
        data_kehutanan.sumber'))
        ->leftjoin('data_kehutanan','data_kehutanan.kode','=','input_kehutanan.id')
        ->where('data_kehutanan.tahun',$tahun)
        ->get();
        return $data;
    }

    public function headings(): array
    {
        return [
            'kode',
            'Header Satu',
            'Header Dua',
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
