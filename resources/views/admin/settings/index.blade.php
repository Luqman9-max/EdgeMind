@extends('admin.layouts.admin')
@section('title', 'Settings — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Settings</h1>
</div>

<div style="max-width: 600px;">
    <div style="background: var(--em-charcoal); border: 1px solid var(--em-steel); border-radius: 2px; padding: 2rem;">
        <p style="color: var(--em-slate); font-size: 0.9rem;">
            Settings management coming soon. Currently, site configuration is managed via environment variables (<code style="color: var(--em-ice);">.env</code>).
        </p>
        <div style="margin-top: 1.5rem; padding-top: 1.5rem; border-top: 1px solid var(--em-steel);">
            <span class="input-label">Current Environment</span>
            <p class="font-mono" style="color: var(--em-white); font-size: 0.9rem; margin-top: 0.5rem;">
                {{ config('app.env') }} | {{ config('app.name') }}
            </p>
        </div>
    </div>
</div>
@endsection
