<?php
namespace App\Http\Controllers;

use App\Models\Position;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;



class PdfController extends Controller
{
    public function generatePdf()
    {
        $positions = Position::all();
        // Load the view and pass the data
        $pdf = Pdf::loadView('pdf', ['positions' => $positions]);

        // Output the generated PDF to the browser
        return $pdf->stream('pdf.pdf'); // You can also use ->download() to force a download
    }
}