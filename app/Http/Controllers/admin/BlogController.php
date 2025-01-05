<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::latest('id')->paginate(5);
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'required|image',
            'publishDate' => 'required|date',
        ]);
        $image  = $request->file('image')->store('uploads/blogs', 'custom');
        Blog::create([
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content,
            'publish_date' => $request->publishDate,
        ]);
        return redirect()->route('admin.blogs.index')->with(['msg' => 'Blog created.', 'type' => 'success']);
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
        $blog = Blog::findOrFail($id);
        return view('admin.blogs.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'image' => 'nullable|image',
            'publishDate' => 'required|date',
        ]);
        $image = $blog->image;
        if ($request->hasFile('image')) {
            $image = $request->file('image')->store('uploads/blogs', 'custom');
        }
        $blog->update([
            'title' => $request->title,
            'image' => $image,
            'content' => $request->content,
            'publish_date' => $request->publishDate,
        ]);
        return redirect()->route('admin.blogs.index')->with(['msg' => 'Blog updated.', 'type' => 'info']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Blog::destroy($id);
        return redirect()->route('admin.blogs.index')->with(['msg' => 'Blog deleted.', 'type' => 'danger']);
    }
}
