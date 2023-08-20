<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PendidikanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pendidikan')
        ->select(DB::raw('input_pendidikan.id,
        input_pendidikan.header_satu,
        input_pendidikan.header_dua,
        input_pendidikan.header_tiga,
        input_pendidikan.header_empat,
        input_pendidikan.input,
        data_pendidikan.tahun,
        data_pendidikan.bentuk,
        data_pendidikan.jumlah,
        data_pendidikan.sumber'))
        ->leftjoin('data_pendidikan','data_pendidikan.kode','=','input_pendidikan.id')
        ->where('data_pendidikan.tahun',$tahun)
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
