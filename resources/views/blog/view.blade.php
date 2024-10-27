@extends('blog.layouts.master')
@section('title')
    Blog Details
@endsection

@section('content')

    <div class="container mt-4">
        <h2 id="blog-title">Blog Title</h2>
        <p><strong>Author:</strong> <span id="blog-author">Author Name</span></p>
        <p><strong>Published Date:</strong> <span id="blog-date">2024-10-10</span></p>
        <p><strong>Category:</strong> <span id="blog-category">Technology</span></p>
        <p><strong>Status:</strong> <span id="blog-status">Published</span></p>
        <hr>
        <div id="blog-content">
            <p>This is where the blog content will be displayed. You can use this section to show the full text of the blog post.</p>
        </div>
    </div>
@endsection
