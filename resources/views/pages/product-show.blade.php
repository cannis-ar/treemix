@extends('layouts.app')

@section('title', $product['name'] . ' · Treemix Profesional')
@section('meta_description', $product['short'])

@section('content')

    <section class="product-detail">
        <div class="container">
            <div class="product-detail__inner">
                <div class="product-detail__visual reveal">
                    @if(!empty($product['image']))
                        <img src="{{ asset($product['image']) }}" alt="{{ $product['name'] }}" class="product-detail__visual-logo">
                    @else
                        <img src="{{ asset('treemix.webp') }}" alt="{{ $product['name'] }}" class="product-detail__visual-logo">
                    @endif
                </div>

                <div class="reveal">
                    <nav class="product-detail__breadcrumb">
                        <a href="{{ route('home') }}">Inicio</a>
                        <span>/</span>
                        <a href="{{ route('products.index') }}">Productos</a>
                        <span>/</span>
                        <span>{{ $product['name'] }}</span>
                    </nav>

                    <h1 class="product-detail__title">{{ $product['name'] }}</h1>
                    @if(!empty($product['tagline']))
                        <p class="product-detail__tagline">{{ $product['tagline'] }}</p>
                    @endif

                    <p class="product-detail__desc">{{ $product['description'] }}</p>

                    @if(!empty($product['composition']))
                        <div class="product-detail__composition">
                            <span class="product-detail__label">Composición</span>
                            <p>{{ $product['composition'] }}</p>
                        </div>
                    @endif

                    @if(!empty($product['features']))
                        <ul class="product-detail__features">
                            @foreach($product['features'] as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    @endif

                    @if(!empty($product['dosage']))
                        <div class="product-detail__dosage">
                            <span class="product-detail__label">Dosis y frecuencia</span>
                            <p>{{ $product['dosage']['range'] ?? ($product['dosage']['ml_per_liter'] . ' ml por litro') }}</p>
                            <p class="product-detail__timing">{{ $product['dosage']['timing'] }}</p>

                            @if(!empty($product['dosage_by_stage']))
                                <ul class="product-detail__dosage-stages">
                                    @foreach($product['dosage_by_stage'] as $stage => $ml)
                                        <li>
                                            <span>{{ ucfirst($stage) }}</span>
                                            <strong>{{ $ml }} ml/L</strong>
                                        </li>
                                    @endforeach
                                </ul>
                            @endif

                            @if(!empty($product['dosage_by_use']))
                                <ul class="product-detail__dosage-stages">
                                    <li><span>Plantín</span><strong>{{ $product['dosage_by_use']['plantin'] }} ml</strong></li>
                                    <li><span>Árbol</span><strong>{{ $product['dosage_by_use']['tree'] }} ml</strong></li>
                                    <li><span>Suelo (m²)</span><strong>{{ $product['dosage_by_use']['soil'] }} ml</strong></li>
                                </ul>
                            @endif
                        </div>
                    @endif

                    <div style="display:flex; gap:1rem; flex-wrap:wrap; margin-top: 2rem;">
                        <a href="https://www.tiendatreemix.com.ar/" target="_blank" rel="noopener" class="btn btn--primary">
                            Comprar en tienda
                            <span class="btn__arrow">→</span>
                        </a>
                        <a href="{{ route('contact.show') }}" class="btn btn--ghost">
                            Consultar asesoramiento
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if(!empty($related))
        <section class="products" style="padding-top: 6rem;">
            <div class="container">
                <div class="section__head section__head--left reveal" style="margin-bottom: 4rem;">
                    <span class="eyebrow">También te puede interesar</span>
                    <h2 class="section__title" style="font-size: clamp(2rem, 4vw, 3rem);">Otros productos</h2>
                </div>
                <div class="products__grid reveal reveal--stagger">
                    @foreach($related as $i => $p)
                        <x-product-card :product="$p" :index="$i + 1" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif

@endsection