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
    @forelse($blogs as $blog)
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
    @empty
        <tr>
            <td colspan="8" class="text-center">No results found</td>
        </tr>
    @endforelse
    </tbody>
</table>

<div class="col-md-12" id="ajax_search_pagination">
    {{ $blogs->links() }}

</div>

