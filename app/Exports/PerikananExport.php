<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PerikananExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_perikanan')
        ->get();
    }

    public function map($perikanan): array
    {
        return [
            $perikanan->id,
            $perikanan->header_satu,
            $perikanan->header_dua,
            $perikanan->header_tiga,
            $perikanan->input,
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
