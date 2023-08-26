<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class SipilExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_sipil')
        ->select(DB::raw('input_sipil.id,
        input_sipil.header_satu,
        input_sipil.header_dua,
        input_sipil.header_tiga,
        input_sipil.header_empat,
        input_sipil.input,
        data_sipil.tahun,
        data_sipil.bentuk,
        data_sipil.jumlah,
        data_sipil.sumber'))
        ->leftjoin('data_sipil','data_sipil.kode','=','input_sipil.id')
        ->where('data_sipil.tahun',$tahun)
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
            'Header Empat',
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
