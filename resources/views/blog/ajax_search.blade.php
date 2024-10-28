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
            <!-- Edit Button as a Link -->
            <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-primary btn-sm">Edit</a>

            <!-- Delete Button as a POST Form -->
            <form action="{{ route('blog.destroy', $blog->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this blog?');">Delete</button>
            </form>
        </td>
    </tr>
@empty
@endforelse
