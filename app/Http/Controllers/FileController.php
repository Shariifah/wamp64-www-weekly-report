<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use App\Models\File;
use App\Models\Service;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class FileController extends Controller
{
    public function add_file_to_website(): View
    {
        $service = Service::all();

        return view('osiris_views.add_file', compact('service'));
    }

    public function file_settings(Request $request)
    {
        $request->validate([
            'file_name' => ['required', 'string', 'max:200', 'unique:'.File::class],
            'employee_name' => ['required', 'string', 'max:200'],
            'file.*' => ['required', 'mimes: xls, xlsx, docx, pdf', 'max:15360'],
            'service_id' => ['required', 'integer']
        ]);

        $file = File::create([
            'file_name' => $request->file_name,
            'employee_name' => $request->employee_name,
            'file' => $request->file->store('storage', 'public'),
            'service_id' => $request->service_id
        ]);

        dd($file);
    }


}
