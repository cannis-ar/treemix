@extends('layouts.app')

@section('title', 'Contacto · Treemix Profesional')
@section('meta_description', 'Contactá al laboratorio Treemix Profesional. Asesoramiento técnico, distribución y soporte.')

@section('content')

<section style="padding-top: 12rem; padding-bottom: 5rem;">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">Hablemos</span>
            <h1 class="section__title" style="font-size: clamp(3rem, 6vw, 5rem);">Contactar al <em>laboratorio</em>.</h1>
            <p class="section__intro">
                Consultas técnicas, distribución, prensa o colaboraciones. Respondemos en menos de 24 horas hábiles.
            </p>
        </div>
    </div>
</section>

<section style="padding-top: 0; padding-bottom: 6rem;">
    <div class="container">
        <div class="contact-form reveal">
            @if(session('status') === 'ok')
                <div class="contact-form__alert contact-form__alert--ok">
                    Mensaje enviado. Te contactamos a la brevedad.
                </div>
            @endif

            @if(session('status') === 'error')
                <div class="contact-form__alert contact-form__alert--error">
                    Ocurrió un error enviando el mensaje. Intentá nuevamente en unos minutos o escribinos a hola@treemix.pro
                </div>
            @endif

            <form action="{{ route('contact.send') }}" method="POST" novalidate>
                @csrf

                <div class="contact-form__row">
                    <div class="contact-form__field">
                        <label for="name">Nombre</label>
                        <input id="name" name="name" type="text" value="{{ old('name') }}" required maxlength="120" autocomplete="name">
                        @error('name') <p class="contact-form__error">{{ $message }}</p> @enderror
                    </div>
                    <div class="contact-form__field">
                        <label for="email">Email</label>
                        <input id="email" name="email" type="email" value="{{ old('email') }}" required maxlength="180" autocomplete="email">
                        @error('email') <p class="contact-form__error">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="contact-form__row">
                    <div class="contact-form__field">
                        <label for="phone">Teléfono <span style="text-transform:none; letter-spacing:0; color: var(--silver-600);">(opcional)</span></label>
                        <input id="phone" name="phone" type="tel" value="{{ old('phone') }}" maxlength="40" autocomplete="tel">
                        @error('phone') <p class="contact-form__error">{{ $message }}</p> @enderror
                    </div>
                    <div class="contact-form__field">
                        <label for="subject">Asunto</label>
                        <input id="subject" name="subject" type="text" value="{{ old('subject') }}" required maxlength="160">
                        @error('subject') <p class="contact-form__error">{{ $message }}</p> @enderror
                    </div>
                </div>

                <div class="contact-form__field">
                    <label for="message">Mensaje</label>
                    <textarea id="message" name="message" required maxlength="4000" rows="6">{{ old('message') }}</textarea>
                    @error('message') <p class="contact-form__error">{{ $message }}</p> @enderror
                </div>

                {{-- Honeypot anti-spam --}}
                <div class="contact-form__honeypot" aria-hidden="true">
                    <label for="honeypot">No completar</label>
                    <input id="honeypot" name="honeypot" type="text" tabindex="-1" autocomplete="off">
                </div>

                <button type="submit" class="btn btn--primary contact-form__submit">
                    Enviar mensaje
                    <span class="btn__arrow">→</span>
                </button>
            </form>
        </div>
    </div>
</section>

@endsection
