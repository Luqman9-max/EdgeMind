@extends('admin.layouts.admin')
@section('title', 'Activity Logs — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Activity Logs</h1>
</div>

<table class="admin-table">
    <thead>
        <tr><th>Admin</th><th>Action</th><th>Description</th><th>Date</th></tr>
    </thead>
    <tbody>
        @forelse($logs as $log)
        <tr>
            <td style="color: var(--em-white);">{{ $log->admin?->name ?? 'Deleted' }}</td>
            <td><span class="badge badge-accent">{{ $log->action }}</span></td>
            <td>{{ $log->description }}</td>
            <td class="font-mono" style="font-size: 0.75rem; color: var(--em-slate);">{{ $log->created_at->format('M d, Y — H:i') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align: center; color: var(--em-slate); padding: 2rem;">No activity recorded yet.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@if($logs->hasPages())
<div class="pagination-edge">{{ $logs->links() }}</div>
@endif
@endsection
