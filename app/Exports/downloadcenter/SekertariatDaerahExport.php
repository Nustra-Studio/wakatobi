<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class SekertariatDaerahExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_sekertariat_daerah')
        ->select(DB::raw('input_sekertariat_daerah.id,
        input_sekertariat_daerah.header_satu,
        input_sekertariat_daerah.header_dua,
        input_sekertariat_daerah.input,
        data_sekertariat_daerah.tahun,
        data_sekertariat_daerah.bentuk,
        data_sekertariat_daerah.jumlah,
        data_sekertariat_daerah.sumber'))
        ->leftjoin('data_sekertariat_daerah','data_sekertariat_daerah.kode','=','input_sekertariat_daerah.id')
        ->where('data_sekertariat_daerah.tahun',$tahun)
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
