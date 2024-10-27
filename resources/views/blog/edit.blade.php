@extends('blog.layouts.master')
@section('title')
    Edit Blog
@endsection

@section('content')

    <div class="container mt-4">
        <h2>Edit Blog</h2>
        <form action="{{ route('blog.update', $blog->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="blogName">Blog Name</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="blogName" value="{{ old('title', $blog->title) }}" >
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="authorName">Author Name</label>
                <input type="text" name="author_name" class="form-control @error('author_name') is-invalid @enderror" id="authorName" value="{{ old('author_name', $blog->author_name) }}" >
                @error('author_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category" value="{{ old('category', $blog->category) }}" >
                @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control @error('status') is-invalid @enderror" name="status" id="status" >
                    <option value="1" {{ old('status', $blog->status) == '1' ? 'selected' : '' }}>Published</option>
                    <option value="0" {{ old('status', $blog->status) == '0' ? 'selected' : '' }}>Draft</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="blogContent">Content</label>
                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="blogContent" rows="5" >{{ old('content', $blog->content) }}</textarea>
                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update Blog</button>
        </form>
    </div>

@endsection
