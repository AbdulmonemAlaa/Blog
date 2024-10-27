<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Blog;
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blog.index',['blogs'=>$blogs]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('blog.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'content' => 'required|string',
        ]);
        Blog::create($validatedData);
        return redirect()->route('blog.index')->with('success', 'Blog added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.view',['blog'=>$blog]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::findOrFail($id);
        return view('blog.edit',['blog'=>$blog]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'author_name' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'status' => 'required|in:0,1',
            'content' => 'required|string',
        ]);

        // Find the blog entry by ID, or throw a 404 error if not found
        $blog = Blog::findOrFail($id);

        // Update the blog entry with the validated data
        $blog->update($validatedData);

        // Redirect to the blog index page with a success message
        return redirect()->route('blog.index')->with('success', 'Blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Find the blog entry by ID, or throw a 404 error if not found
        $blog = Blog::findOrFail($id);

        // Delete the blog entry
        $blog->delete();

        // Redirect to the blog index page with a success message
        return redirect()->route('blog.index')->with('success', 'Blog deleted successfully');
    }
}
