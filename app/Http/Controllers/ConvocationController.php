<?php

namespace App\Http\Controllers;

use App\Models\Concour;
use App\Models\Convocation;
use Barryvdh\DomPDF\Facade\Pdf as FacadePdf;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class ConvocationController extends Controller
{
    public function index()
    {
        $convocations = Convocation::latest()->get();
        return view('convocations.index', compact('convocations'));
    }

    public function create()
    {
        return view('convocations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'convocation_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'nullable',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean'
        ]);

        Convocation::create($validated);
        return redirect()->route('convocations.index')->with('success', 'Convocation created successfully.');
    }

    public function edit(Convocation $convocation)
    {
        return view('convocations.edit', compact('convocation'));
    }
    public function show(Convocation $convocation)
    {
        return view('convocations.show', compact('convocation'));
    }

    public function update(Request $request, Convocation $convocation)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'convocation_date' => 'required|date',
            'start_time' => 'required',
            'end_time' => 'nullable',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string',
            'status' => 'nullable|boolean'
        ]);

        $convocation->update($validated);
        return redirect()->route('convocations.index')->with('success', 'Convocation updated successfully.');
    }

    public function destroy(Convocation $convocation)
    {
        $convocation->delete();
        return redirect()->route('convocations.index')->with('success', 'Convocation deleted successfully.');
    }

    public function downloadConvocationDetails(Concour $concour)
    {
        // Retrieve the convocation details
        $convocation = Convocation::findOrFail($concour->convocation_id);

        // Prepare the view for the PDF
        $pdf = FacadePdf::loadView('mails.convocation-details', [
            'full_name' => $concour->user->name, // Replace with the actual recipient name
            'convocation' => $convocation
        ]);

        // Download the PDF
        return $pdf->download('convocation-details.pdf');
    }
}
