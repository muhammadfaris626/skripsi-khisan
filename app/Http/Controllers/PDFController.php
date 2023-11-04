<?php

namespace App\Http\Controllers;

use App\Models\User;
// use Barryvdh\DomPDF\PDF;
use App\Models\Evaluation;
use Illuminate\Http\Request;
use App\Models\CategoryAchievement;
use App\Models\ColumnList;
use App\Models\EvaluationList;
use DateTime;
use \PDF;
class PDFController extends Controller
{
    public function downloadEvaluation($id) {
        $evaluation = Evaluation::find($id);
        $columns = ColumnList::all();
        $data = [
            'tanggal' => date_format(date_create($evaluation->evaluation_date), "d M Y"),
            'periode' => DateTime::createFromFormat('!m', $evaluation->assessment_period)->format('F'),
            'nama_penilai' => $evaluation->user->name,
            'nama_karyawan' => $evaluation->employee->name,
            'nik' => $evaluation->employee->registration_number,
            'outlet' => $evaluation->employee->outlet->name.' / '.$evaluation->employee->grade->name,
            'column' => $columns,
            'evaluation_id' => $evaluation->id
        ];
        $pdf = PDF::loadView('evaluationPDF', $data);
        return $pdf->download('evaluation.pdf');
    }
}
