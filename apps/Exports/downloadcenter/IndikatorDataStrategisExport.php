<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class IndikatorDataStrategisExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_indikator_data_strategis')
        ->select(DB::raw('input_indikator_data_strategis.id,
        input_indikator_data_strategis.header_satu,
        input_indikator_data_strategis.header_dua,
        input_indikator_data_strategis.input,
        data_indikator_data_strategis.tahun,
        data_indikator_data_strategis.bentuk,
        data_indikator_data_strategis.jumlah,
        data_indikator_data_strategis.sumber'))
        ->leftjoin('data_indikator_data_strategis','data_indikator_data_strategis.kode','=','input_indikator_data_strategis.id')
        ->where('data_indikator_data_strategis.tahun',$tahun)
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
