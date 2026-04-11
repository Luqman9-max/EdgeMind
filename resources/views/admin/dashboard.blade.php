@extends('admin.layouts.admin')

@section('title', 'Dashboard — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Dashboard</h1>
    <a href="{{ route('admin.books.create') }}" class="btn btn-primary btn-sm">+ NEW BOOK</a>
</div>

{{-- Stats Grid --}}
<div class="stats-grid">
    <div class="stat-card">
        <div class="stat-label">Total Books</div>
        <div class="stat-value">{{ $stats['total_books'] }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Published</div>
        <div class="stat-value">{{ $stats['published_books'] }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Featured</div>
        <div class="stat-value">{{ $stats['featured_books'] }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Total Leads</div>
        <div class="stat-value" style="color: var(--em-ice);">{{ $stats['total_leads'] }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Subscribers</div>
        <div class="stat-value" style="color: var(--em-ice);">{{ $stats['total_subscribers'] }}</div>
    </div>
    <div class="stat-card">
        <div class="stat-label">Unread Messages</div>
        <div class="stat-value" style="color: {{ $stats['unread_messages'] > 0 ? 'var(--em-accent)' : 'var(--em-white)' }};">{{ $stats['unread_messages'] }}</div>
    </div>
</div>

{{-- Recent Activity --}}
<div style="margin-top: 2rem;">
    <h3 style="font-size: 1rem; margin-bottom: 1rem;">Recent Activity</h3>
    @if($stats['recent_logs']->count() > 0)
    <table class="admin-table">
        <thead>
            <tr>
                <th>Admin</th>
                <th>Action</th>
                <th>Description</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
            @foreach($stats['recent_logs'] as $log)
            <tr>
                <td>{{ $log->admin?->name ?? 'Deleted' }}</td>
                <td><span class="badge badge-accent">{{ $log->action }}</span></td>
                <td>{{ Str::limit($log->description, 60) }}</td>
                <td class="font-mono" style="font-size: 0.75rem; color: var(--em-slate);">{{ $log->created_at->format('M d, H:i') }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @else
    <p style="color: var(--em-slate); font-size: 0.875rem;">No activity yet.</p>
    @endif
</div>
@endsection
