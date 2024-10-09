<?php

namespace App\Http\Controllers\ClothingBusiness;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AboutController extends Controller
{
    /**
     * Show the form to edit the About section.
     */
    public function edit()
    {
        $about = About::where('user_id', Auth::id())->first();
        return view('clothingbusiness.about.edit', compact('about'));
    }

    /**
     * Store or update the About section.
     */
    public function update(Request $request)
    {
        $request->validate([
            'company_about' => 'required|string|max:500',
        ]);

        About::updateOrCreate(
            ['user_id' => Auth::id()],
            ['company_about' => $request->company_about]
        );

        return redirect()->back()->with('success', 'About section updated successfully.');
    }
}
