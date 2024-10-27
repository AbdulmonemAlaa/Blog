@extends('blog.layouts.master')
@section('title')
    Blog Details
@endsection

@section('content')

    <div class="container mt-4">
        <h2 id="blog-title">{{$blog->title}}</h2>
        <p><strong>Author:</strong> <span id="blog-author">{{$blog->author_name}}</span></p>
        <p><strong>Published Date:</strong> <span id="blog-date">{{$blog->created_at}}</span></p>
        <p><strong>Edited Date:</strong> <span id="blog-date">{{$blog->updated_at}}</span></p>
        <p><strong>Category:</strong> <span id="blog-category">{{$blog->category}}</span></p>
        <p><strong>Status:</strong> <span id="blog-status">@if($blog->status == 1) Published @else Draft @endif</span></p>
        <hr>
        <div id="blog-content">
            <p>{{$blog->content}}</p>
        </div>
    </div>
@endsection
