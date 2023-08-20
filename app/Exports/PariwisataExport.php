<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PariwisataExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_pariwisata')
        ->get();
    }

    public function map($pariwisata): array
    {
        return [
            $pariwisata->id,
            $pariwisata->header_satu,
            $pariwisata->header_dua,
            $pariwisata->input,
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
