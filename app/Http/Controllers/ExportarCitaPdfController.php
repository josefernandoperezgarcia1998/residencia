<?php

namespace App\Http\Controllers;

use App\Models\Cita;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Support\Facades\DB;

class ExportarCitaPdfController extends Controller
{
    public function verCitaPdf($id)
    {
        $cita_data = Cita::where('id',$id)
                            ->select('citas.*')
                            ->get();

        $pdf = PDF::loadView('pdf.cita', compact('cita_data'));
        return $pdf->stream();
    }
    
    public function exportarverCitaPdfPdf($id)
    {
        $cita_data = Cita::where('id',$id)
                            ->select('citas.*')
                            ->get();
                            
        $pdf = PDF::loadView('pdf.cita', compact('cita_data'));
        return $pdf->download("Cita médica.pdf");
    }
}
