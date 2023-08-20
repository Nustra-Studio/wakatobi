<?php

namespace App\Exports\downloadcenter;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithMapping;

class ModalExport implements FromCollection,ShouldAutoSize,WithHeadings
{
    public function __construct(string $tahun)
    {
        $this->tahun = $tahun;
    }

    public function collection()
    {
        $tahun = $this->tahun;
        
        $data = DB::table('input_modal')
        ->select(DB::raw('input_modal.id,
        input_modal.header_satu,
        input_modal.header_dua,
        input_modal.header_tiga,
        input_modal.input,
        data_modal.tahun,
        data_modal.bentuk,
        data_modal.jumlah,
        data_modal.sumber'))
        ->leftjoin('data_modal','data_modal.kode','=','input_modal.id')
        ->where('data_modal.tahun',$tahun)
        ->get();
        return $data;
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
