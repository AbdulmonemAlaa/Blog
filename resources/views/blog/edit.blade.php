@extends('blog.layouts.master')
@section('title')
    Edit Blog
@endsection

@section('content')

    <div class="container mt-4">
        <h2>Edit Blog</h2>
        <form>
            <div class="form-group">
                <label for="blogName">Blog Name</label>
                <input type="text" class="form-control" id="blogName" placeholder="Enter blog name">
            </div>
            <div class="form-group">
                <label for="authorName">Author Name</label>
                <input type="text" class="form-control" id="authorName" placeholder="Enter author name">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" id="category" placeholder="Enter category">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control" id="status">
                    <option>Published</option>
                    <option>Draft</option>
                </select>
            </div>
            <div class="form-group">
                <label for="blogContent">Content</label>
                <textarea class="form-control" id="blogContent" rows="5" placeholder="Enter blog content"></textarea>
            </div>
            <button type="submit" class="btn btn-success">Add Blog</button>
        </form>
    </div>
@endsection
