<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class EnergisumberdayaExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_energi_sumberdaya')
        ->get();
    }
    public function map($energisumberdaya): array
    {
        return [
            $energisumberdaya->id,
            $energisumberdaya->header_satu,
            $energisumberdaya->header_dua,
            $energisumberdaya->header_tiga,
            $energisumberdaya->input,
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
