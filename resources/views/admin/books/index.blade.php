@extends('admin.layouts.admin')
@section('title', 'Books — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Books</h1>
    <a href="{{ route('admin.books.create') }}" class="btn btn-primary btn-sm">+ NEW BOOK</a>
</div>

{{-- Filters --}}
<div style="display: flex; gap: 1rem; margin-bottom: 1.5rem; flex-wrap: wrap; align-items: center;">
    <form method="GET" style="display: flex; gap: 0.75rem; flex-wrap: wrap; align-items: center;">
        <input type="text" name="search" class="input-edge" placeholder="Search..." value="{{ request('search') }}" style="width: 220px; padding: 0.5rem 0.75rem; font-size: 0.85rem;">
        <select name="filter" class="input-edge" style="width: 150px; padding: 0.5rem; font-size: 0.85rem;">
            <option value="">All Status</option>
            <option value="published" {{ request('filter') == 'published' ? 'selected' : '' }}>Published</option>
            <option value="drafts" {{ request('filter') == 'drafts' ? 'selected' : '' }}>Drafts</option>
            <option value="featured" {{ request('filter') == 'featured' ? 'selected' : '' }}>Featured</option>
        </select>
        <button type="submit" class="btn btn-outline btn-sm">FILTER</button>
        @if(request()->hasAny(['search', 'filter']))
            <a href="{{ route('admin.books.index') }}" class="btn btn-ghost btn-sm">CLEAR</a>
        @endif
    </form>
</div>

{{-- Books Table --}}
<table class="admin-table">
    <thead>
        <tr>
            <th>Title</th>
            <th>Category</th>
            <th>Status</th>
            <th>Price</th>
            <th>Added By</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @forelse($books as $book)
        <tr>
            <td>
                <div style="display: flex; align-items: center; gap: 0.75rem;">
                    @if($book->cover_image)
                        <img src="{{ asset('storage/' . $book->cover_image) }}" style="width: 36px; height: 48px; object-fit: cover; border-radius: 2px;">
                    @else
                        <div style="width: 36px; height: 48px; background: var(--em-gunmetal); border-radius: 2px; display: flex; align-items: center; justify-content: center;">
                            <span class="font-mono" style="font-size: 0.5rem; color: var(--em-slate);">{{ strtoupper(substr($book->title, 0, 2)) }}</span>
                        </div>
                    @endif
                    <div>
                        <strong style="color: var(--em-white);">{{ $book->title }}</strong>
                        @if($book->is_featured)
                            <span class="badge badge-accent" style="margin-left: 0.5rem;">FEATURED</span>
                        @endif
                    </div>
                </div>
            </td>
            <td>{{ $book->category ?? '—' }}</td>
            <td>
                @if($book->is_published)
                    <span class="badge badge-success">Published</span>
                @else
                    <span class="badge badge-warning">Draft</span>
                @endif
            </td>
            <td class="font-mono">{{ $book->is_free ? 'Free' : ($book->price ? '$'.$book->price : '—') }}</td>
            <td style="color: var(--em-slate);">{{ $book->admin?->name ?? '—' }}</td>
            <td>
                <div style="display: flex; gap: 0.5rem;">
                    <a href="{{ route('admin.books.edit', $book) }}" class="btn btn-ghost btn-sm">Edit</a>
                    <form action="{{ route('admin.books.destroy', $book) }}" method="POST" onsubmit="return confirm('Delete this book?');">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-ghost btn-sm" style="color: var(--em-accent);">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" style="text-align: center; color: var(--em-slate); padding: 2rem;">No books found.</td>
        </tr>
        @endforelse
    </tbody>
</table>

{{-- Pagination --}}
@if($books->hasPages())
<div class="pagination-edge">
    {{ $books->links() }}
</div>
@endif
@endsection
