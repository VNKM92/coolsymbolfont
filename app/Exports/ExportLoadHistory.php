<?php

namespace App\Exports;

use App\Models\User;
use App\Models\Load;
use App\Models\LoadRateHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Illuminate\Support\Facades\Cache;

class ExportLoadHistory implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    
    public function view(): View
    {
       
        $invoices = LoadRateHistory::with('loadorigin')->get();
        libxml_use_internal_errors(true);
        return view('export.datloads',compact('invoices'));
        
    }
    
    public function headings() : array
    {
        // return User::all();
        return ["User Id", "Load Date","Alarm Status"];
    }
    
    
    public function collection()
    {
        // return Load::all();
        return load::all();
    }
    
    
    
}
