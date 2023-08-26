<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class KepegawaianExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_kepegawaian')
        ->select(DB::raw('input_kepegawaian.id,
        input_kepegawaian.header_satu,
        input_kepegawaian.header_dua,
        input_kepegawaian.header_tiga,
        input_kepegawaian.input,
        data_kepegawaian.tahun,
        data_kepegawaian.bentuk,
        data_kepegawaian.jumlah,
        data_kepegawaian.sumber'))
        ->leftjoin('data_kepegawaian','data_kepegawaian.kode','=','input_kepegawaian.id')
        ->where('data_kepegawaian.tahun',$tahun)
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
