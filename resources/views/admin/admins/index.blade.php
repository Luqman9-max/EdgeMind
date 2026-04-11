@extends('admin.layouts.admin')
@section('title', 'Admins — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Admins</h1>
    <a href="{{ route('admin.admins.create') }}" class="btn btn-primary btn-sm">+ NEW ADMIN</a>
</div>

<table class="admin-table">
    <thead>
        <tr><th>Name</th><th>Email</th><th>Created</th><th>Actions</th></tr>
    </thead>
    <tbody>
        @foreach($admins as $admin)
        <tr>
            <td style="color: var(--em-white);">{{ $admin->name }}</td>
            <td class="font-mono" style="font-size: 0.8rem;">{{ $admin->email }}</td>
            <td class="font-mono" style="font-size: 0.75rem; color: var(--em-slate);">{{ $admin->created_at->format('M d, Y') }}</td>
            <td>
                <div style="display: flex; gap: 0.5rem;">
                    <a href="{{ route('admin.admins.edit', $admin) }}" class="btn btn-ghost btn-sm">Edit</a>
                    @if($admin->id !== Auth::guard('admin')->id())
                    <form action="{{ route('admin.admins.destroy', $admin) }}" method="POST" onsubmit="return confirm('Delete this admin?');">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-ghost btn-sm" style="color: var(--em-accent);">Delete</button>
                    </form>
                    @endif
                </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
