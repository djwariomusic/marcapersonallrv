<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use PDF;

class PdfController extends Controller
{
  public function createPdf111($opc){
    $pdf = PDF::loadView('pdf.invoice');
    if ($opc==1){
    return $pdf->stream('analisis-intro');}
    if ($opc==2){
    return $pdf->download('analisis-intro.pdf');}

  }
}
