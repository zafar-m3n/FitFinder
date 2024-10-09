<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Preference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PreferenceController extends Controller
{
    /**
     * Display the form to manage preferences.
     */
    public function edit()
    {
        $preference = Preference::firstOrNew(['user_id' => Auth::id()]);
        return view('customer.preferences.edit', compact('preference'));
    }


    /**
     * Update the preferences in storage.
     */
    public function update(Request $request)
    {
        $request->validate([
            'clothing_style' => 'required|string|max:255',
            'preferred_colors' => 'required|string|max:255',
            'preferred_size' => 'required|string|max:50',
            'fabric_material' => 'nullable|string|max:255',
        ]);

        $preference = Auth::user()->preference ?? new Preference();
        $preference->user_id = Auth::id();
        $preference->clothing_style = $request->clothing_style;
        $preference->preferred_colors = $request->preferred_colors;
        $preference->preferred_size = $request->preferred_size;
        $preference->fabric_material = $request->fabric_material;

        $preference->save();

        return redirect()->route('customer.preferences.edit')->with('success', 'Preferences updated successfully.');
    }
}
