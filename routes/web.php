<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;

Route::get('download/evaluation/{id}', [PDFController::class, 'downloadEvaluation'])->name('download.evaluation');
// Route::get('download/evaluation/{id}', function() { return view('evaluationPDF'); })->name('download.evaluation');

