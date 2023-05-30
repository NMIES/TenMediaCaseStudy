<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    // Show all companies
    public function index() {
        return view('companies.index', [
            'company' => Company::all()
        ]);
    }

    // Show single view
    public function show(Company $company) {
        return view('companies.show', [
            'company' => $company
        ]);
    }
}
