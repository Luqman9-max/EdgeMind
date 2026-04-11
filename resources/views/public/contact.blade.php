@extends('public.layouts.app')

@section('title', 'Contact — Edge Mind')
@section('meta_description', 'Get in touch with Edge Mind. Inquiries, collaborations, or challenges.')

@section('content')

{{-- ===== CONTACT HEADER ===== --}}
<section id="contact-header" class="section-padding" style="padding-top: 10rem; padding-bottom: 2rem;">
    <div class="container-narrow" style="text-align: center;">
        <div class="reveal">
            <span class="font-mono" style="font-size: 0.7rem; color: var(--em-ice); text-transform: uppercase; letter-spacing: 0.2em;">Contact</span>
            <h1 style="margin-top: 0.5rem; margin-bottom: 0.75rem;">Transmit.</h1>
            <p style="color: var(--em-slate);">Inquiries, collaborations, or challenges. Send it.</p>
        </div>
    </div>
</section>

{{-- ===== CONTACT FORM ===== --}}
<section id="contact-form" class="section-padding">
    <div class="container-narrow" style="max-width: 640px;">
        <div x-data="{
            name: '', email: '', topic: '', message: '',
            submitted: false, loading: false, error: '',
            async submitForm() {
                this.loading = true;
                this.error = '';
                try {
                    const response = await fetch('{{ route('contact.submit') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content,
                            'Accept': 'application/json'
                        },
                        body: JSON.stringify({
                            name: this.name,
                            email: this.email,
                            topic: this.topic,
                            message: this.message
                        })
                    });
                    const data = await response.json();
                    if (response.ok) {
                        this.submitted = true;
                    } else {
                        this.error = data.message || 'Submission failed.';
                    }
                } catch (e) {
                    this.error = 'Connection failed. Try again.';
                }
                this.loading = false;
            }
        }">
            {{-- Form --}}
            <form @submit.prevent="submitForm" x-show="!submitted">
                <div class="reveal" style="margin-bottom: 1.5rem;">
                    <label class="input-label" for="contact-name">Name</label>
                    <input type="text" id="contact-name" class="input-edge" x-model="name" required placeholder="Your name">
                </div>

                <div class="reveal reveal-delay-1" style="margin-bottom: 1.5rem;">
                    <label class="input-label" for="contact-email">Email</label>
                    <input type="email" id="contact-email" class="input-edge" x-model="email" required placeholder="your@email.com">
                </div>

                <div class="reveal reveal-delay-2" style="margin-bottom: 1.5rem;">
                    <label class="input-label" for="contact-topic">Topic</label>
                    <select id="contact-topic" class="input-edge" x-model="topic" required>
                        <option value="" disabled selected>Select a topic</option>
                        <option value="General Inquiry">General Inquiry</option>
                        <option value="Collaboration">Collaboration</option>
                        <option value="Book Submission">Book Submission</option>
                        <option value="Other">Other</option>
                    </select>
                </div>

                <div class="reveal reveal-delay-3" style="margin-bottom: 2rem;">
                    <label class="input-label" for="contact-message">Message</label>
                    <textarea id="contact-message" class="input-edge" x-model="message" required placeholder="Your message..." rows="5"></textarea>
                </div>

                <div class="reveal reveal-delay-4">
                    <button type="submit" class="btn btn-primary btn-lg" style="width: 100%;" :disabled="loading">
                        <span x-show="!loading">SEND SIGNAL</span>
                        <span x-show="loading" x-cloak>TRANSMITTING...</span>
                    </button>
                </div>

                <div x-show="error" x-cloak style="margin-top: 1rem; text-align: center;">
                    <p style="color: var(--em-accent); font-size: 0.85rem;" x-text="error"></p>
                </div>
            </form>

            {{-- Confirmation State --}}
            <div x-show="submitted" x-cloak style="text-align: center; padding: 4rem 0;">
                <div style="margin-bottom: 1.5rem;">
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" style="margin: 0 auto;">
                        <circle cx="24" cy="24" r="23" stroke="var(--em-accent)" stroke-width="2"/>
                        <path d="M15 24L21 30L33 18" stroke="var(--em-accent)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </div>
                <h3 style="margin-bottom: 0.75rem;">Signal received.</h3>
                <p style="color: var(--em-slate);">We'll respond if it matters.</p>
            </div>
        </div>

        {{-- Alternative Contact --}}
        <div class="reveal" style="text-align: center; margin-top: 4rem; padding-top: 2rem; border-top: 1px solid var(--em-steel);">
            <p class="font-mono" style="font-size: 0.75rem; color: var(--em-slate); text-transform: uppercase; letter-spacing: 0.15em; margin-bottom: 0.75rem;">Direct line</p>
            <a href="mailto:hello@edgemind.com" class="font-mono" style="color: var(--em-silver); font-size: 0.9rem;">hello@edgemind.com</a>
        </div>
    </div>
</section>

@endsection
