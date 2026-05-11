@extends('layouts.app')

@section('title', 'Catálogo · Treemix Profesional')
@section('meta_description', 'Catálogo completo de la línea Profesional Treemix. Productos biotecnológicos premium para cultivos.')

@section('content')

<section style="padding-top: 12rem; padding-bottom: 5rem;">
    <div class="container">
        <div class="section__head reveal" style="margin-bottom: 4rem;">
            <span class="eyebrow">Catálogo completo</span>
            <h1 class="section__title" style="font-size: clamp(3rem, 6vw, 5rem);">La línea <em>Profesional</em></h1>
            <p class="section__intro">
                Cada producto cubre una etapa específica del ciclo. Diseñados para trabajar juntos o por separado, según las necesidades de tu cultivo.
            </p>
        </div>

        <div class="products__grid reveal reveal--stagger">
            @foreach($products as $i => $p)
                <x-product-card :product="$p" :index="$i + 1" />
            @endforeach
        </div>
    </div>
</section>

<section class="cta">
    <div class="container reveal">
        <h2 class="cta__title">¿Necesitás <em>asesoramiento</em>?</h2>
        <p class="cta__text">
            Nuestro equipo de biotecnólogos puede ayudarte a armar el protocolo ideal para tu cultivo.
        </p>
        <div class="cta__actions">
            <a href="{{ route('contact.show') }}" class="btn btn--primary">
                Hablar con el laboratorio
                <span class="btn__arrow">→</span>
            </a>
            <a href="https://www.tiendatreemix.com.ar/" target="_blank" rel="noopener" class="btn btn--ghost">
                Comprar online
            </a>
        </div>
    </div>
</section>

@endsection
