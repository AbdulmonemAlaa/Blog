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
            <tr>
                <td>1</td>
                <td>First Blog</td>
                <td>John Doe</td>
                <td>Tech</td>
                <td>Published</td>
                <td>2024-10-27</td>
                <td>2024-10-27</td>
                <td>
                    <button class="btn btn-primary btn-sm">Edit</button>
                    <button class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            <!-- Add more rows as needed -->
            </tbody>
        </table>
    </div>

@endsection
