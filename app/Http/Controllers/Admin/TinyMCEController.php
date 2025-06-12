<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TinyMCEController extends Controller
{
    public function upload(Request $request)
    {
        if ($request->hasFile('file')) {
            $path = $request->file('file')->store('uploads/editor', 'public');

            return response()->json([
                'location' => asset('storage/' . $path), // must be a full URL
            ]);
        }

        return response()->json(['error' => 'No file uploaded.'], 400);
    }
}
