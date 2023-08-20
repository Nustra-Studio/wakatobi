<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KearsipanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_kearsipan')
        ->select(DB::raw('input_kearsipan.id,
        input_kearsipan.header_satu,
        input_kearsipan.header_dua,
        input_kearsipan.header_tiga,
        input_kearsipan.header_empat,
        input_kearsipan.input,
        data_kearsipan.tahun,
        data_kearsipan.bentuk,
        data_kearsipan.jumlah,
        data_kearsipan.sumber'))
        ->leftjoin('data_kearsipan','data_kearsipan.kode','=','input_kearsipan.id')
        ->where('data_kearsipan.tahun',$tahun)
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
