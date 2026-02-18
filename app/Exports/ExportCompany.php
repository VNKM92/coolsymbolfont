<?php

namespace App\Exports;

use App\Models\LoadRateHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use App\Models\User;
use App\Models\Load;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class ExportCompany implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */

    public function view(): View
    {
        return view('export.invoices', [
            'invoices' => load::all()
        ]);
    }
    
    public function headings() : array
    {
        // return User::all();
        return ["User Id", "Load Date","Alarm Status"];
    }


    public function collection()
    {
        
        return Company::all();
    }
}
