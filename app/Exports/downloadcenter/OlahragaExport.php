<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class OlahragaExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_olahraga')
        ->select(DB::raw('input_olahraga.id,
        input_olahraga.header_satu,
        input_olahraga.input,
        data_olahraga.tahun,
        data_olahraga.bentuk,
        data_olahraga.jumlah,
        data_olahraga.sumber'))
        ->leftjoin('data_olahraga','data_olahraga.kode','=','input_olahraga.id')
        ->where('data_olahraga.tahun',$tahun)
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
