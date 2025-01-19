<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrialForm;

class TrialFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:15',
            'corporate_email' => 'required|email|max:255',
            'job_title' => 'required|string|max:255',
            'company_name' => 'required|string|max:255',
            'industry' => 'required|string|max:255',
        ]);

        TrialForm::create($request->all());

        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}