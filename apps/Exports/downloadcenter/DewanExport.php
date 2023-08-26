<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class DewanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_sekertariat_dewan')
        ->select(DB::raw('input_sekertariat_dewan.id,
        input_sekertariat_dewan.header_satu,
        input_sekertariat_dewan.input,
        data_sekertariat_dewan.tahun,
        data_sekertariat_dewan.bentuk,
        data_sekertariat_dewan.jumlah,
        data_sekertariat_dewan.sumber'))
        ->leftjoin('data_sekertariat_dewan','data_sekertariat_dewan.kode','=','input_sekertariat_dewan.id')
        ->where('data_sekertariat_dewan.tahun',$tahun)
        ->get();
        return $data;
    }

    public function headings(): array
    {
        return [
            'kode',
            'Header Satu',
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
