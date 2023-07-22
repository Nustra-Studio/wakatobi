<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerindustrianExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_perindustrian')
        ->get();
    }

    public function map($perindustrian): array
    {
        return [
            $perindustrian->id,
            $perindustrian->header_satu,
            $perindustrian->header_dua,
            $perindustrian->header_tiga,
            $perindustrian->input,
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
