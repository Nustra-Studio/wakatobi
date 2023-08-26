<?php

namespace App\Exports;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PemberdayaanMasyarakatExport implements FromCollection,ShouldAutoSize,WithHeadings,WithMapping
{
    public function collection()
    {
        return DB::table('input_pemberdayaan_masyarakat')
        ->get();
    }

    public function map($lingkunganhidup): array
    {
        return [
            $lingkunganhidup->id,
            $lingkunganhidup->header_satu,
            $lingkunganhidup->header_dua,
            $lingkunganhidup->header_tiga,
            $lingkunganhidup->header_empat,
            $lingkunganhidup->input,
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
            'Input',
            'tahun',
            'bentuk',
            'jumlah',
            'sumber_data',
        ];
    }
}
