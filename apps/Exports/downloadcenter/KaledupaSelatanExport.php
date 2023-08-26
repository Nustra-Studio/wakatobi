<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KaledupaSelatanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_kaledupaselatan')
        ->select(DB::raw('input_kaledupaselatan.id,
        input_kaledupaselatan.header_satu,
        input_kaledupaselatan.header_dua,
        input_kaledupaselatan.header_tiga,
        input_kaledupaselatan.input,
        data_kaledupaselatan.tahun,
        data_kaledupaselatan.bentuk,
        data_kaledupaselatan.jumlah,
        data_kaledupaselatan.sumber'))
        ->leftjoin('data_kaledupaselatan','data_kaledupaselatan.kode','=','input_kaledupaselatan.id')
        ->where('data_kaledupaselatan.tahun',$tahun)
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
