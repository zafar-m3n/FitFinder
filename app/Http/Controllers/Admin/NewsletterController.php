<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletters = Newsletter::all();
        return view('admin.newsletters.index', compact('newsletters'));
    }

    public function create()
    {
        return view('admin.newsletters.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|boolean',
            'sent_date' => 'nullable|date',
        ]);

        Newsletter::create([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'sent_date' => $request->sent_date,
            'created_by' => Auth::id(),
        ]);

        return redirect()->route('admin.newsletters.index')->with('success', 'Newsletter created successfully.');
    }

    public function edit(Newsletter $newsletter)
    {
        return view('admin.newsletters.edit', compact('newsletter'));
    }

    public function update(Request $request, Newsletter $newsletter)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'status' => 'required|boolean',
            'sent_date' => 'nullable|date',
        ]);

        $newsletter->update([
            'title' => $request->title,
            'content' => $request->content,
            'status' => $request->status,
            'sent_date' => $request->sent_date,
        ]);

        return redirect()->route('admin.newsletters.index')->with('success', 'Newsletter updated successfully.');
    }

    public function destroy(Newsletter $newsletter)
    {
        $newsletter->delete();
        return redirect()->route('admin.newsletters.index')->with('success', 'Newsletter deleted successfully.');
    }
}
