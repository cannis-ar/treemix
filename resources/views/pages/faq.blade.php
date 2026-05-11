@extends('layouts.app')

@section('title', 'Preguntas frecuentes · Treemix Profesional')
@section('meta_description', 'Respondemos las consultas más frecuentes sobre la línea Profesional Treemix.')

@section('content')

<section style="padding-top: 12rem; padding-bottom: 5rem;">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">Soporte</span>
            <h1 class="section__title" style="font-size: clamp(3rem, 6vw, 5rem);">Preguntas <em>frecuentes</em>.</h1>
            <p class="section__intro">
                Si no encontrás lo que buscás, escribinos directamente. Respondemos en menos de 24 horas hábiles.
            </p>
        </div>
    </div>
</section>

<section class="faq" style="padding-top: 0;">
    <div class="container">
        <div class="faq__list reveal">
            @foreach($items as $i => $item)
                <div class="faq__item {{ $i === 0 ? 'open' : '' }}" data-faq-item>
                    <div class="faq__q" data-faq-q>
                        <span>{{ $item['q'] }}</span>
                        <span class="faq__icon" aria-hidden="true"></span>
                    </div>
                    <div class="faq__a">
                        <p>{{ $item['a'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="cta">
    <div class="container reveal">
        <h2 class="cta__title">¿Otra <em>consulta</em>?</h2>
        <p class="cta__text">Escribinos directamente al laboratorio.</p>
        <div class="cta__actions">
            <a href="{{ route('contact.show') }}" class="btn btn--primary">
                Contactar
                <span class="btn__arrow">→</span>
            </a>
        </div>
    </div>
</section>

@endsection
