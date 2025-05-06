<?php

namespace App\Exports;

use App\Models\SurToken;
use Maatwebsite\Excel\Concerns\FromCollection;

class SurTokenExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {

        return SurToken::where('status', 'New')->get(['wallet', 'amount','token']);
    }
}
