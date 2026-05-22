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

            {{-- Bloque introductorio del catálogo --}}
            <div class="catalog-intro reveal" style="margin-bottom: 5rem;">
                <div class="catalog-intro__body">
                    <h2 class="catalog-intro__title">Sobre nuestros productos</h2>
                    <p class="catalog-intro__lead">
                        Disponemos de una línea con tres tipos de composiciones distintas:
                        <strong>orgánicos</strong>, <strong>biológicos</strong> y <strong>biominerales</strong>.
                    </p>
                    <p>
                        Las fórmulas son exclusivas e innovadoras. Somos pioneros y líderes en determinadas composiciones,
                        con productos que no se consiguen en el mercado convencional.
                    </p>
                    <p>
                        La diversidad de composiciones permite que cada cultivador arme un plan de cultivo completo
                        o elija únicamente los productos que se adapten a su metodología.
                    </p>
                </div>
                <ul class="catalog-intro__pills">
                    <li>Veganos</li>
                    <li>Agroecológicos</li>
                    <li>Cruelty free</li>
                    <li>Fórmulas exclusivas</li>
                </ul>
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