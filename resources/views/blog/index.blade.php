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
        <div id="ajax_search_result">
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
            {{ $blogs->links() }}
        </div>
    </div>



@endsection

@section('script')
    <script>
        $(document).ready(function() {
            // Listen for input events on the search box
            $(document).on('input', "#search", function() {
                var search = $(this).val();
                performSearch(1, search); // Default to page 1 for new searches
            });

            // Function to perform AJAX search
            function performSearch(page, search) {
                $.ajax({
                    url: "{{ route('blog.search') }}", // POST route for search and pagination
                    type: 'post', // Use POST for pagination as well
                    dataType: 'html',
                    cache: false,
                    data: {
                        search: search,
                        page: page, // Send the current page number
                        "_token": "{{ csrf_token() }}" // CSRF token for security
                    },
                    success: function(data) {
                        $("#ajax_search_result").html(data); // Update the HTML content
                    },
                    error: function() {
                        console.error("Error occurred while fetching blogs.");
                    }
                });
            }

            // Handle pagination click events with POST
            $(document).on('click', "#ajax_search_pagination a", function(e) {
                e.preventDefault(); // Prevent default link behavior

                // Extract the page number from the pagination link
                var page = $(this).attr("href").split('page=')[1];
                var search = $("#search").val();

                // Perform search with the extracted page number
                performSearch(page, search);
            });
        });
    </script>

@endsection
