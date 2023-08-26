<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PengawasanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pengawasan')
        ->select(DB::raw('input_pengawasan.id,
        input_pengawasan.header_satu,
        input_pengawasan.input,
        data_pengawasan.tahun,
        data_pengawasan.bentuk,
        data_pengawasan.jumlah,
        data_pengawasan.sumber'))
        ->leftjoin('data_pengawasan','data_pengawasan.kode','=','input_pengawasan.id')
        ->where('data_pengawasan.tahun',$tahun)
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
