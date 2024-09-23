<?php

namespace App\Http\Controllers;

use App\Models\Kontak;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Requests\KontakCreateRequest;
use App\Http\Requests\KontakUpdateRequest;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\QueryException;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $kontaks = Kontak::paginate(10);

        return view('datakontak.index', compact('kontaks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('datakontak.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KontakCreateRequest $request): RedirectResponse
    {
        Kontak::create($request->validated());

        return redirect()->route('datakontak.index')->with('success', 'Contact created successfully.');
    }

    /**
     * Display the specified resource.
     */ 
    public function show($id): View
    {
        $kontak = Kontak::find($id);
        if (!$kontak) {
            abort(404); // Show a 404 error if not found
        }

        return view('datakontak.show', compact('kontak'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $kontak = Kontak::find($id); // Manually find the record
        if (!$kontak) {
            abort(404); // Show a 404 error if not found
        }

        return view('datakontak.edit', compact('kontak'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KontakUpdateRequest $request, $id): RedirectResponse
    {
        \Log::info('Incoming contact ID from route:', ['id' => $id]);
    
        // Manually retrieve the contact
        $kontak = Kontak::find($id);
        if (!$kontak) {
            \Log::error('Contact not found:', ['id' => $id]);
            return redirect()->back()->with('error', 'Contact not found.');
        }
    
        try {
            // Log the retrieved contact data
            \Log::info('Retrieved contact data:', $kontak->toArray());
    
            // Check if the contact is soft deleted
            if ($kontak->trashed()) {
                \Log::error('Cannot update, contact is soft deleted', ['id' => $kontak->id]);
                return redirect()->back()->with('error', 'Contact is deleted and cannot be updated.');
            }
    
            \Log::info('Updating contact with ID:', ['id' => $kontak->id]);
            \Log::info('Incoming request data:', $request->validated());
    
            // Attempt to update the contact
            $updateResult = $kontak->update($request->validated());
    
            \Log::info('Update result: ', ['result' => $updateResult]);
    
            if (!$updateResult) {
                \Log::error('Failed to update contact: ', ['id' => $kontak->id]);
            }
    
            return redirect()->route('datakontak.index')->with('success', 'Contact updated successfully');
        } catch (\Exception $e) {
            \Log::error('Error during update: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Update failed: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
/**
 * Remove the specified resource from storage.
 */
    public function destroy($id): RedirectResponse
    {
        \Log::info('Incoming contact ID for deletion:', ['id' => $id]);

        // Manually retrieve the contact
        $kontak = Kontak::find($id);
        if (!$kontak) {
            \Log::error('Contact not found for deletion:', ['id' => $id]);
            return redirect()->back()->with('error', 'Contact not found.');
        }

        try {
            \Log::info('Deleting contact with ID: ' . $kontak->id);
            $kontak->delete();

            return redirect()->route('datakontak.index')->with('success', 'Contact deleted successfully');
        } catch (\Exception $e) {
            \Log::error('Error during deletion: ' . $e->getMessage());
            return redirect()->back()->with('error', 'Deletion failed: ' . $e->getMessage());
        }
    }
}
