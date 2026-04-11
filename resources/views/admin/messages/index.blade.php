@extends('admin.layouts.admin')
@section('title', 'Messages — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Contact Messages</h1>
</div>

<table class="admin-table">
    <thead>
        <tr><th>From</th><th>Topic</th><th>Message</th><th>Date</th><th>Actions</th></tr>
    </thead>
    <tbody>
        @forelse($messages as $msg)
        <tr style="{{ !$msg->is_read ? 'background: var(--em-gunmetal);' : '' }}">
            <td>
                <div>
                    <strong style="color: var(--em-white);">{{ $msg->name }}</strong>
                    @if(!$msg->is_read)
                        <span class="badge badge-accent" style="margin-left: 0.5rem;">NEW</span>
                    @endif
                    <div class="font-mono" style="font-size: 0.75rem; color: var(--em-slate);">{{ $msg->email }}</div>
                </div>
            </td>
            <td>{{ $msg->topic }}</td>
            <td style="color: var(--em-slate);">{{ Str::limit($msg->message, 60) }}</td>
            <td class="font-mono" style="font-size: 0.75rem; color: var(--em-slate);">{{ $msg->created_at->format('M d, H:i') }}</td>
            <td>
                <div style="display: flex; gap: 0.5rem;">
                    <a href="{{ route('admin.messages.show', $msg) }}" class="btn btn-ghost btn-sm">View</a>
                    <form action="{{ route('admin.messages.destroy', $msg) }}" method="POST" onsubmit="return confirm('Delete this message?');">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-ghost btn-sm" style="color: var(--em-accent);">Delete</button>
                    </form>
                </div>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5" style="text-align: center; color: var(--em-slate); padding: 2rem;">No messages yet.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@if($messages->hasPages())
<div class="pagination-edge">{{ $messages->links() }}</div>
@endif
@endsection
