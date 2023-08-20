<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class ProgramUnggulanExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_program_unggulan')
        ->select(DB::raw('input_program_unggulan.id,
        input_program_unggulan.header_satu,
        input_program_unggulan.input,
        data_program_unggulan.tahun,
        data_program_unggulan.bentuk,
        data_program_unggulan.jumlah,
        data_program_unggulan.sumber'))
        ->leftjoin('data_program_unggulan','data_program_unggulan.kode','=','input_program_unggulan.id')
        ->where('data_program_unggulan.tahun',$tahun)
        ->get();
        return $data;
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
