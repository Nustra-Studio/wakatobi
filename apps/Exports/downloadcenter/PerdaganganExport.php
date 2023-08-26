<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerdaganganExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_perdagangan')
        ->select(DB::raw('input_perdagangan.id,
        input_perdagangan.header_satu,
        input_perdagangan.header_dua,
        input_perdagangan.header_tiga,
        input_perdagangan.input,
        data_perdagangan.tahun,
        data_perdagangan.bentuk,
        data_perdagangan.jumlah,
        data_perdagangan.sumber'))
        ->leftjoin('data_perdagangan','data_perdagangan.kode','=','input_perdagangan.id')
        ->where('data_perdagangan.tahun',$tahun)
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
