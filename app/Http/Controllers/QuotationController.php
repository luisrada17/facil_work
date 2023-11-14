<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quotation;
use App\Models\JobRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class QuotationController extends Controller
{
    public function index(): View
    {
        $quotations = Quotation::all();
        return view('quotations.index', compact('quotations'));
    }

    public function create(): View
    {
        $jobRequests = JobRequest::all();
        return view('quotations.create', compact('jobRequests'));
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'job_request_id' => 'required',
            'user_id' => 'required',
            'price' => 'required|numeric',
            'time_estimate' => 'required',
            'message' => 'required',
        ]);

        Quotation::create($request->all());

        return redirect()->route('quotations.index')->with('success', 'Cotización enviada exitosamente.');
    }

    public function show(Quotation $quotation): View
    {
        return view('quotations.show', compact('quotation'));
    }

    public function edit(Quotation $quotation): View
    {
        $jobRequests = JobRequest::all();
        return view('quotations.edit', compact('quotation', 'jobRequests'));
    }

    public function update(Request $request, Quotation $quotation): RedirectResponse
    {
        $request->validate([
            'job_request_id' => 'required',
            'user_id' => 'required',
            'price' => 'required|numeric',
            'time_estimate' => 'required',
            'message' => 'required',
        ]);

        $quotation->update($request->all());

        return redirect()->route('quotations.index')->with('success', 'Cotización actualizada exitosamente.');
    }

    public function destroy(Quotation $quotation): RedirectResponse
    {
        $quotation->delete();
        return redirect()->route('quotations.index')->with('success', 'Cotización eliminada exitosamente.');
    }
}
