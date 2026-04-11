@extends('admin.layouts.admin')
@section('title', 'Leads — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Leads <span style="font-size: 0.875rem; color: var(--em-slate); font-weight: 400;">({{ $leads->total() }} total)</span></h1>
</div>

{{-- Search --}}
<div style="margin-bottom: 1.5rem;">
    <form method="GET" style="display: flex; gap: 0.75rem; align-items: center;">
        <input type="text" name="search" class="input-edge" placeholder="Search name or email..." value="{{ request('search') }}" style="width: 280px; padding: 0.5rem 0.75rem; font-size: 0.85rem;">
        @if($sources->count() > 1)
        <select name="source" class="input-edge" style="width: 160px; padding: 0.5rem; font-size: 0.85rem;">
            <option value="">All Sources</option>
            @foreach($sources as $source)
                <option value="{{ $source }}" {{ request('source') == $source ? 'selected' : '' }}>{{ $source }}</option>
            @endforeach
        </select>
        @endif
        <button type="submit" class="btn btn-outline btn-sm">SEARCH</button>
    </form>
</div>

<table class="admin-table">
    <thead>
        <tr><th>Name</th><th>Email</th><th>Source</th><th>Captured</th></tr>
    </thead>
    <tbody>
        @forelse($leads as $lead)
        <tr>
            <td style="color: var(--em-white);">{{ $lead->name }}</td>
            <td class="font-mono" style="font-size: 0.8rem;">{{ $lead->email }}</td>
            <td><span class="badge badge-ice">{{ $lead->source }}</span></td>
            <td class="font-mono" style="font-size: 0.75rem; color: var(--em-slate);">{{ $lead->created_at->format('M d, Y H:i') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="4" style="text-align: center; color: var(--em-slate); padding: 2rem;">No leads captured yet.</td>
        </tr>
        @endforelse
    </tbody>
</table>

@if($leads->hasPages())
<div class="pagination-edge">{{ $leads->links() }}</div>
@endif
@endsection
