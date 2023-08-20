<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class TogobinongkoExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_togobinongko')
        ->select(DB::raw('input_togobinongko.id,
        input_togobinongko.header_satu,
        input_togobinongko.header_dua,
        input_togobinongko.header_tiga,
        input_togobinongko.input,
        data_togobinongko.tahun,
        data_togobinongko.bentuk,
        data_togobinongko.jumlah,
        data_togobinongko.sumber'))
        ->leftjoin('data_togobinongko','data_togobinongko.kode','=','input_togobinongko.id')
        ->where('data_togobinongko.tahun',$tahun)
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
