<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class IndikatorDataStrategisExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_indikator_data_strategis')
        ->get();
    }

    public function map($indikatordatastrategis): array
    {
        return [
            $indikatordatastrategis->id,
            $indikatordatastrategis->header_satu,
            $indikatordatastrategis->header_dua,
            $indikatordatastrategis->input,
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
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
