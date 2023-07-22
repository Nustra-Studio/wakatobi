<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class SosialExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_sosial')
        ->get();
    }

    public function map($sosial): array
    {
        return [
            $sosial->id,
            $sosial->header_satu,
            $sosial->header_dua,
            $sosial->header_tiga,
            $sosial->input,
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
