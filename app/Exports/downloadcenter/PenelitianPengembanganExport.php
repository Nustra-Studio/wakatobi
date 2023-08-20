<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class PenelitianPengembanganExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_penelitian_pengembangan')
        ->select(DB::raw('input_penelitian_pengembangan.id,
        input_penelitian_pengembangan.header_satu,
        input_penelitian_pengembangan.input,
        data_penelitian_pengembangan.tahun,
        data_penelitian_pengembangan.bentuk,
        data_penelitian_pengembangan.jumlah,
        data_penelitian_pengembangan.sumber'))
        ->leftjoin('data_penelitian_pengembangan','data_penelitian_pengembangan.kode','=','input_penelitian_pengembangan.id')
        ->where('data_penelitian_pengembangan.tahun',$tahun)
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
