<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class BinongkoExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_binongko')
        ->select(DB::raw('input_binongko.id,
        input_binongko.header_satu,
        input_binongko.header_dua,
        input_binongko.header_tiga,
        input_binongko.input,
        data_binongko.tahun,
        data_binongko.bentuk,
        data_binongko.jumlah,
        data_binongko.sumber'))
        ->leftjoin('data_binongko','data_binongko.kode','=','input_binongko.id')
        ->where('data_binongko.tahun',$tahun)
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
