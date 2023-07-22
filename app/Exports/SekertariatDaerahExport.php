<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class SekertariatDaerahExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_sekertariat_daerah')
        ->get();
    }

    public function map($sekertariatdaerah): array
    {
        return [
            $sekertariatdaerah->id,
            $sekertariatdaerah->header_satu,
            $sekertariatdaerah->header_dua,
            $sekertariatdaerah->input,
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
