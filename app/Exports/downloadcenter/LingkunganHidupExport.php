<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class LingkunganHidupExport implements FromCollection,ShouldAutoSize,WithHeadings
{

    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_lingkungan_hidup')
        ->select(DB::raw('input_lingkungan_hidup.id,
        input_lingkungan_hidup.header_satu,
        input_lingkungan_hidup.header_dua,
        input_lingkungan_hidup.header_tiga,
        input_lingkungan_hidup.header_empat,
        input_lingkungan_hidup.input,
        data_lingkungan_hidup.tahun,
        data_lingkungan_hidup.bentuk,
        data_lingkungan_hidup.jumlah,
        data_lingkungan_hidup.sumber'))
        ->leftjoin('data_lingkungan_hidup','data_lingkungan_hidup.kode','=','input_lingkungan_hidup.id')
        ->where('data_lingkungan_hidup.tahun',$tahun)
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
