<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PersandianExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_persandian')
        ->get();
    }

    public function map($geografis): array
    {
        return [
            $geografis->id,
            $geografis->header_satu,
            $geografis->input,
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
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
