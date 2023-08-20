<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PemberdayaanPerempuanExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_pemberdayaan_perempuan')
        ->get();
    }

    public function map($pemberdayaanperempuan): array
    {
        return [
            $pemberdayaanperempuan->id,
            $pemberdayaanperempuan->header_satu,
            $pemberdayaanperempuan->header_dua,
            $pemberdayaanperempuan->header_tiga,
            $pemberdayaanperempuan->header_empat,
            $pemberdayaanperempuan->header_lima,
            $pemberdayaanperempuan->header_enam,
            $pemberdayaanperempuan->input,
            date('Y'),
            '-',
            '0',
            '-',
        ];
    }

    public function headings(): array
    {
        return [
            'kode',
            'Header Satu',
            'Header Dua',
            'Header Tiga',
            'Header Empat',
            'Header Lima',
            'Header Enam',
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
