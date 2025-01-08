<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $feedbacks = Feedback::paginate(5);
        return view('admin.feedbacks.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.feedbacks.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'content' => 'required',
        ]);
        $image = $request->file('image')->store('uploads/feedbacks', 'custom');
        Feedback::create([
            'name' => $request->name,
            'image' => $image,
            'content' => $request->content,
        ]);
        return redirect()->route('admin.feedbacks.index')->with(['msg' => 'Feedback created.', 'type' => 'success']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $feedback = Feedback::findOrFail($id);
        return view('admin.feedbacks.edit', compact('feedback'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $feedback = Feedback::findOrFail($id);
        $request->validate([
            'name' => 'required',
            'image' => 'nullable|image',
            'content' => 'required',
        ]);
        $image = $feedback->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('uploads/feedbacks', 'custom');
        }
        $feedback->update([
            'name' => $request->name,
            'image' => $image,
            'content' => $request->content,
        ]);
        return redirect()->route('admin.feedbacks.index')->with(['msg' => 'Feedback updated.', 'type' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Feedback::destroy($id);
        return redirect()->route('admin.feedbacks.index')->with(['msg' => 'Feedback deleted.', 'type' => 'danger']);
    }
}
