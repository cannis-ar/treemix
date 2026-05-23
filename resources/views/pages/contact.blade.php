@extends('layouts.app')

@section('title', 'Contacto · Treemix Profesional')
@section('meta_description', 'Contactá al laboratorio Treemix Profesional. Asesoramiento técnico, distribución y soporte.')

@section('content')

<style>
.contact-form select {
    width: 100%;
    background: rgba(10, 10, 11, 0.6);
    border: 1px solid rgba(200, 200, 208, 0.12);
    border-radius: 6px;
    padding: 1rem 1.125rem;
    color: var(--silver-100);
    font-family: var(--font-body);
    font-size: 1rem;
    transition: all 0.3s cubic-bezier(0.22, 1, 0.36, 1);
    appearance: none;
    -webkit-appearance: none;
    cursor: pointer;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='8' viewBox='0 0 12 8'%3E%3Cpath d='M1 1l5 5 5-5' stroke='%23888894' stroke-width='1.5' fill='none' stroke-linecap='round'/%3E%3C/svg%3E");
    background-repeat: no-repeat;
    background-position: right 1.125rem center;
    padding-right: 2.5rem;
}

.contact-form select:focus {
    outline: none;
    border-color: rgba(200, 200, 208, 0.35);
    background-color: rgba(10, 10, 11, 0.85);
    box-shadow: 0 0 0 4px rgba(200, 200, 208, 0.05);
}

.contact-form select option {
    background: #111114;
    color: #e5e5ea;
}
</style>

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
                    Ocurrió un error enviando el mensaje. Intentá nuevamente en unos minutos o escribinos a info@treemix.pro
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

                <div class="contact-form__field">
                    <label for="crop_type">Tipo de cultivo</label>
                    <select name="crop_type" id="crop_type" required>
                        <option value="" disabled selected>Seleccioná el tipo</option>
                        <option value="Reprocann" {{ old('crop_type') === 'Reprocann' ? 'selected' : '' }}>Reprocann</option>
                        <option value="ONG"       {{ old('crop_type') === 'ONG'       ? 'selected' : '' }}>ONG</option>
                        <option value="I+D"       {{ old('crop_type') === 'I+D'       ? 'selected' : '' }}>I+D</option>
                    </select>
                    @error('crop_type')<span class="contact-form__error">{{ $message }}</span>@enderror
                </div>

                <div class="contact-form__field">
                    <label for="reason">Motivo de contacto</label>
                    <select name="reason" id="reason" required>
                        <option value="" disabled selected>Seleccioná un motivo</option>
                        <option value="Compras" {{ old('reason') === 'Compras' ? 'selected' : '' }}>Compras</option>
                        <option value="Asesoramiento" {{ old('reason') === 'Asesoramiento' ? 'selected' : '' }}>Asesoramiento</option>
                        <option value="Servicios para ONGs e I+D" {{ old('reason') === 'Servicios para ONGs e I+D' ? 'selected' : '' }}>Servicios para ONGs e I+D</option>
                    </select>
                    @error('reason')<span class="contact-form__error">{{ $message }}</span>@enderror
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
