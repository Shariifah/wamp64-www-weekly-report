<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(): View
    {
        return view('osiris_views.service');
    }

    public function create_employee_service(Request $request)
    {
        $request->validate([
            'libelle_service' => ['required', 'string'],
        ]);

        $service = Service::create([
            'libelle_service' => $request->libelle_service,
        ]);

        dd($service);

    }
}
