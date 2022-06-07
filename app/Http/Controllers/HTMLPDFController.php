<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

class HTMLPDFController extends Controller
{
    public function htmlPdf()
    {
        // selecting PDF view
        $pdf = Pdf::loadView('htmlView');

        // download pdf file
        return $pdf->download('pdfview.pdf');
    }
}
