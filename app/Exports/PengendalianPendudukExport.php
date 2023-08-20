<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PengendalianPendudukExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_pengendalian_penduduk')
        ->get();
    }

    public function map($pengendalianpenduduk): array
    {
        return [
            $pengendalianpenduduk->id,
            $pengendalianpenduduk->header_satu,
            $pengendalianpenduduk->header_dua,
            $pengendalianpenduduk->header_tiga,
            $pengendalianpenduduk->input,
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
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
