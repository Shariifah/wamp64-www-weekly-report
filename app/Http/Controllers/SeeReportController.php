<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class SeeReportController extends Controller
{
    public function voir($id): View
    {
        $file = File::find($id);

        return view('osiris_views.report_information', compact('file'));
    }


    public function index(): View
    {
        $file = File::all();

        return view('osiris_views.reports_list', compact('file'));
    }
}
