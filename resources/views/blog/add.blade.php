@extends('blog.layouts.master')
@section('title')
    Add Blog
@endsection

@section('content')

    <div class="container mt-4">
        <h2>Add New Blog</h2>
        <form action="{{ route('blog.store') }}" method="POST">
            @csrf
            <!-- Display All Validation Errors at the Top -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-group">
                <label for="blogName">Blog Name</label>
                <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" id="blogName" value="{{ old('title') }}" placeholder="Enter blog name" required>
                @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="authorName">Author Name</label>
                <input type="text" name="author_name" class="form-control @error('author_name') is-invalid @enderror" id="authorName" value="{{ old('author_name') }}" placeholder="Enter author name" required>
                @error('author_name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" name="category" class="form-control @error('category') is-invalid @enderror" id="category" value="{{ old('category') }}" placeholder="Enter category" required>
                @error('category')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <select class="form-control @error('status') is-invalid @enderror" name="status" id="status" required>
                    <option value="1" {{ old('status') == '1' ? 'selected' : '' }}>Published</option>
                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>Draft</option>
                </select>
                @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label for="blogContent">Content</label>
                <textarea name="content" class="form-control @error('content') is-invalid @enderror" id="blogContent" rows="5" placeholder="Enter blog content" required>{{ old('content') }}</textarea>
                @error('content')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Add Blog</button>
        </form>


    </div>
@endsection
