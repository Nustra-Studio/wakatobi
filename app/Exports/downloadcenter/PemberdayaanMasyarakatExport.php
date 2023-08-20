<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PemberdayaanMasyarakatExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_pemberdayaan_masyarakat')
        ->select(DB::raw('input_pemberdayaan_masyarakat.id,
        input_pemberdayaan_masyarakat.header_satu,
        input_pemberdayaan_masyarakat.header_dua,
        input_pemberdayaan_masyarakat.header_tiga,
        input_pemberdayaan_masyarakat.header_empat,
        input_pemberdayaan_masyarakat.input,
        data_pemberdayaan_masyarakat.tahun,
        data_pemberdayaan_masyarakat.bentuk,
        data_pemberdayaan_masyarakat.jumlah,
        data_pemberdayaan_masyarakat.sumber'))
        ->leftjoin('data_pemberdayaan_masyarakat','data_pemberdayaan_masyarakat.kode','=','input_pemberdayaan_masyarakat.id')
        ->where('data_pemberdayaan_masyarakat.tahun',$tahun)
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
