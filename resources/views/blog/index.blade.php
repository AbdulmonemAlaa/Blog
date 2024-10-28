@extends('blog.layouts.master')
@section('title')
    My Blog
@endsection

@section('content')

    <div class="container mt-4">
        <h2>Blog List</h2>
        <!-- Search Input -->
        <div class="form-group">
            <input type="text" id="search" class="form-control" placeholder="Search for blog name ...">
        </div>
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
            <tbody id="ajax_search_result">
            {{-- Initial data loading will go here --}}
            @foreach($blogs as $blog)
                <tr>
                    <td>
                        <a href="{{ route('blog.show', $blog->id) }}">{{ $loop->iteration }}</a>
                    </td>
                    <td>{{ $blog->title }}</td>
                    <td>{{ $blog->author_name }}</td>
                    <td>{{ $blog->category }}</td>
                    <td>{{ $blog->status == 1 ? 'Published' : 'Draft' }}</td>
                    <td>{{ $blog->created_at }}</td>
                    <td>{{ $blog->updated_at }}</td>
                    <td>
                        <form action="{{ route('blog.edit', $blog->id) }}" method="GET" style="display:inline;">
                            <button type="submit" class="btn btn-primary btn-sm">Edit</button>
                        </form>
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

@section('script')
    <script>
        $(document).ready(function () {
            // Listen for input events on the search box
            $('#search').on('input', function () {
                var search = $(this).val();

                $.ajax({
                    url: "{{ route('blog.search') }}",
                    type: 'POST',
                    dataType: 'html',
                    cache: false,
                    data: {
                        search: search,
                        _token: "{{ csrf_token() }}"
                    },
                    success: function (data) {
                        $('#ajax_search_result').html(data); // Replace the table body with the response
                    },
                    error: function () {
                        console.error('AJAX Error');
                    }
                });
            });
        });
    </script>
@endsection
