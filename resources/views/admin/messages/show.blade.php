@extends('admin.layouts.admin')
@section('title', 'View Message — Edge Mind Admin')

@section('content')
<div class="admin-header">
    <h1>Message from {{ $message->name }}</h1>
    <a href="{{ route('admin.messages.index') }}" class="btn btn-outline btn-sm">← BACK</a>
</div>

<div style="max-width: 700px; background: var(--em-charcoal); border: 1px solid var(--em-steel); border-radius: 2px; padding: 2rem;">
    <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; margin-bottom: 2rem;">
        <div>
            <span class="input-label">From</span>
            <p style="color: var(--em-white); margin: 0.25rem 0 0;">{{ $message->name }}</p>
        </div>
        <div>
            <span class="input-label">Email</span>
            <p class="font-mono" style="color: var(--em-white); margin: 0.25rem 0 0; font-size: 0.9rem;">{{ $message->email }}</p>
        </div>
        <div>
            <span class="input-label">Topic</span>
            <p style="color: var(--em-white); margin: 0.25rem 0 0;">{{ $message->topic }}</p>
        </div>
        <div>
            <span class="input-label">Received</span>
            <p class="font-mono" style="color: var(--em-slate); margin: 0.25rem 0 0; font-size: 0.85rem;">{{ $message->created_at->format('M d, Y — H:i') }}</p>
        </div>
    </div>

    <div style="border-top: 1px solid var(--em-steel); padding-top: 1.5rem;">
        <span class="input-label">Message</span>
        <div style="color: var(--em-silver); line-height: 1.8; margin-top: 0.5rem;">
            {!! nl2br(e($message->message)) !!}
        </div>
    </div>
</div>
@endsection
