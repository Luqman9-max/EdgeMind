@extends('public.layouts.app')

@section('title', 'Access The Vault — Edge Mind')
@section('meta_description', 'Enter your email to unlock the Edge Mind vault. One step. Full access.')

@section('content')

<section id="lead-form" style="min-height: 100vh; display: flex; align-items: center; justify-content: center; padding: 2rem;">
    <div style="width: 100%; max-width: 440px;">
        <div class="reveal" style="text-align: center; margin-bottom: 3rem;">
            <a href="{{ route('home') }}" class="nav-logo" style="font-size: 1.5rem; text-decoration: none;">Edge<span>Mind</span></a>
        </div>

        <div style="background: var(--em-charcoal); border: 1px solid var(--em-steel); border-radius: 2px; padding: 3rem;">
            <div class="reveal">
                <h2 style="font-size: 1.75rem; margin-bottom: 0.5rem;">One step. Full access.</h2>
                <p style="color: var(--em-slate); font-size: 0.9rem; margin-bottom: 2rem;">Enter your email to unlock the vault.</p>
            </div>

            <form action="{{ route('lead.submit') }}" method="POST">
                @csrf

                <div class="reveal reveal-delay-1" style="margin-bottom: 1.25rem;">
                    <label class="input-label" for="lead-name">Name</label>
                    <input type="text" id="lead-name" name="name" class="input-edge" required placeholder="Your name" value="{{ old('name') }}">
                    @error('name')
                        <p style="color: var(--em-accent); font-size: 0.8rem; margin-top: 0.5rem;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="reveal reveal-delay-2" style="margin-bottom: 2rem;">
                    <label class="input-label" for="lead-email">Email</label>
                    <input type="email" id="lead-email" name="email" class="input-edge" required placeholder="your@email.com" value="{{ old('email') }}">
                    @error('email')
                        <p style="color: var(--em-accent); font-size: 0.8rem; margin-top: 0.5rem;">{{ $message }}</p>
                    @enderror
                </div>

                <div class="reveal reveal-delay-3">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;">UNLOCK ACCESS</button>
                </div>
            </form>

            <div class="reveal reveal-delay-4" style="text-align: center; margin-top: 1.5rem;">
                <p class="font-mono" style="font-size: 0.65rem; color: var(--em-steel);">We don't spam. That's weak.</p>
            </div>
        </div>
    </div>
</section>

@endsection
