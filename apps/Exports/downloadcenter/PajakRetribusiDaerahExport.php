<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PajakRetribusiDaerahExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pajak_retribusi_daerah')
        ->select(DB::raw('input_pajak_retribusi_daerah.id,
        input_pajak_retribusi_daerah.header_satu,
        input_pajak_retribusi_daerah.input,
        data_pajak_retribusi_daerah.tahun,
        data_pajak_retribusi_daerah.bentuk,
        data_pajak_retribusi_daerah.jumlah,
        data_pajak_retribusi_daerah.sumber'))
        ->leftjoin('data_pajak_retribusi_daerah','data_pajak_retribusi_daerah.kode','=','input_pajak_retribusi_daerah.id')
        ->where('data_pajak_retribusi_daerah.tahun',$tahun)
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
