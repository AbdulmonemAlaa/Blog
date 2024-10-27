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
                <tr onclick="window.location='{{ route('blog.show', $blog->id) }}'" style="cursor: pointer;">
                    <td>{{$blog->id}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->author_name}}</td>
                    <td>{{$blog->category}}</td>
                    <td>@if($blog->status == 1) Published @else Draft @endif</td>
                    <td>{{$blog->created_at}}</td>
                    <td>{{$blog->updated_at}}</td>
                    <td>
{{--                        {{ route('blog.edit', $blog->id) }}--}}
                        <button class="btn btn-primary btn-sm" onclick="event.stopPropagation(); window.location=''">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="event.stopPropagation(); /* Add your delete logic here */">Delete</button>
                    </td>
                </tr>
            @endforeach
            </tbody>

        </table>
    </div>

@endsection
