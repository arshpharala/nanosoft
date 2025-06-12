<?php

namespace App\Http\Controllers\Admin;

use App\Models\OnlineStore;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class OnlineStoreController extends Controller
{
    public function index()
    {
        $stores = OnlineStore::get();
        return view('admin.online_stores.index', compact('stores'));
    }

    public function create()
    {
        return view('admin.online_stores.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|unique:online_stores,url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            $validated['logo'] = $request->file('logo')->store('stores', 'public');
        }

        OnlineStore::create($validated);

        return response()->json([
            'redirect' => $request->input('redirect') ?? route('admin.online-stores.index'),
            'success' => true,
            'message' => 'Store added successfully.'
        ]);
    }

    public function edit($id)
    {
        $online_store = OnlineStore::findOrFail($id);
        return view('admin.online_stores.edit', compact('online_store'));
    }

    public function update(Request $request, $id)
    {
        $online_store = OnlineStore::findOrFail($id);
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'url' => 'required|url|unique:online_stores,url,' . $online_store->id,
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'nullable|string',
        ]);

        if ($request->hasFile('logo')) {
            if ($online_store->logo) {
                Storage::disk('public')->delete($online_store->logo);
            }
            $validated['logo'] = $request->file('logo')->store('stores', 'public');
        }

        $online_store->update($validated);

        return response()->json([
            'redirect' => $request->input('redirect') ?? route('admin.online-stores.index'),
            'success' => true,
            'message' => 'Store updated successfully.'
        ]);

    }

    public function destroy($id)
    {
        $online_store = OnlineStore::findOrFail($id);
        if ($online_store->logo) {
            Storage::disk('public')->delete($online_store->logo);
        }
        $online_store->delete();
        return response()->json(['success' => true, 'message' => 'Store deleted successfully.']);
    }
}
