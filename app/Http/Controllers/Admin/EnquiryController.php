<?php

namespace App\Http\Controllers\Admin;

use App\Models\Enquiry;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $enquiries = Enquiry::latest()->get();

        return view('admin.enquiries.index', compact('enquiries'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        return view('admin.enquiries.show', compact('enquiry'));
    }



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $enquiry = Enquiry::findOrFail($id);
        $enquiry->delete();

        return response()->json(['success' => true, 'message' => 'Enquiry deleted successfully']);
    }
}
