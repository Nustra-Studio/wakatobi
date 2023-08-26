<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerikananExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_perikanan')
        ->select(DB::raw('input_perikanan.id,
        input_perikanan.header_satu,
        input_perikanan.header_dua,
        input_perikanan.header_tiga,
        input_perikanan.input,
        data_perikanan.tahun,
        data_perikanan.bentuk,
        data_perikanan.jumlah,
        data_perikanan.sumber'))
        ->leftjoin('data_perikanan','data_perikanan.kode','=','input_perikanan.id')
        ->where('data_perikanan.tahun',$tahun)
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
