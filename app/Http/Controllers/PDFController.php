<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Videojuego;

class PDFController extends Controller {

    public function imprimir() {
        $today = Carbon::now()->format('d/m/Y');
        $videojuegos = Videojuego::listar_generos();
        $pdf = \PDF::loadView('vistapdf', \compact('today', 'videojuegos'));
        return $pdf->download('PDFDocument.pdf');
    }

}
