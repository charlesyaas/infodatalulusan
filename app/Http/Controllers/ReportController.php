<?php

namespace App\Http\Controllers;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use App\Exports\ExportLulusan;

class ReportController extends Controller
{
    // Export Lulusann
    public function exportDataLulusan() {

        return Excel::download(new ExportLulusan(), 'Report Lulusan'.'.csv');
    }
}
