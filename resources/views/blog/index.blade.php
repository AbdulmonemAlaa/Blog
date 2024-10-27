@extends('blog.layouts.master')
@section('title')
    My Blog
@endsection

@section('content')

    <div class="container mt-4">
        <h2>Blog List</h2>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Blog Title</th>
                <th>Author Name</th>
                <th>Category</th>
                <th>Status</th>
                <th>Published Date</th>
                <th>Edited Date</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach($blogs as $blog)
                <tr>
                    <td>
                        <a href="{{ route('blog.show', $blog->id) }}">{{ $blog->id }}</a>
                    </td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->author_name}}</td>
                    <td>{{$blog->category}}</td>
                    <td>@if($blog->status == 1) Published @else Draft @endif</td>
                    <td>{{$blog->created_at}}</td>
                    <td>{{$blog->updated_at}}</td>
                    <td>
                        <!-- Edit Button as a Link -->
                        <form action="{{ route('blog.edit', $blog->id) }}" method="GET" style="display:inline;">
                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                        </form>

                        <!-- Delete Button as a POST Form -->
                        <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
