<?php

namespace App\Exports;

use App\Pelanggan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Support\Facades\DB;

class PelangganExcelExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $pelanggan = DB::table('pelanggan')->get();
        return $pelanggan;
    }
}
