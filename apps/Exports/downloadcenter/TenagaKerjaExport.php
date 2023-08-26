<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class TenagaKerjaExport implements FromCollection,ShouldAutoSize,WithHeadings
{    

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_tenagakerja')
        ->select(DB::raw('input_tenagakerja.id,
        input_tenagakerja.header_satu,
        input_tenagakerja.header_dua,
        input_tenagakerja.header_tiga,
        input_tenagakerja.input,
        data_tenagakerja.tahun,
        data_tenagakerja.bentuk,
        data_tenagakerja.jumlah,
        data_tenagakerja.sumber'))
        ->leftjoin('data_tenagakerja','data_tenagakerja.kode','=','input_tenagakerja.id')
        ->where('data_tenagakerja.tahun',$tahun)
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
