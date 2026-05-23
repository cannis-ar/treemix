@extends('layouts.app')

@section('title', 'Treemix Profesional · Biotecnología premium para cultivos')
@section('meta_description', 'Línea Profesional de Treemix. Biotecnología desarrollada por científicos en Buenos Aires. Productos premium para cultivos de alto rendimiento.')

@section('content')

{{-- ===== HERO ===== --}}
<section class="hero">
    <div class="hero__grid-bg"></div>
    <div class="container">
        <div class="hero__inner">
            <div class="hero__copy">
                <span class="eyebrow hero__eyebrow">Línea Profesional · Edición laboratorio</span>
                <h1 class="hero__title">
                    Biotecnología<br>
                    <em>premium</em> para<br>
                    cada cultivo.
                </h1>
                <p class="hero__lead">
                    La línea Profesional de Treemix se especializa por productos concentrados, con años de desarrollo biotecnológico en formulaciones diseñadas para cultivadores que buscan máxima producción y por sobre todo, calidad.
                <div class="hero__actions">
                    <a href="{{ route('products.index') }}" class="btn btn--primary">
                        Ver toda la línea
                        <span class="btn__arrow">→</span>
                    </a>
                    <a href="{{ route('tecnologia') }}" class="btn btn--ghost">
                        Conocer la ciencia
                    </a>
                </div>
            </div>

            <div class="hero__visual" aria-hidden="true">
                <div class="hero__visual-ring hero__visual-ring--outer"></div>
                <div class="hero__visual-ring"></div>
                <div class="hero__visual-disc"></div>
                <img src="{{ asset('treemix.webp') }}" alt="" class="hero__visual-logo">
            </div>
        </div>
    </div>

    <div class="hero__scroll" aria-hidden="true">
        <span>Scroll</span>
        <span class="hero__scroll-line"></span>
    </div>
</section>

{{-- ===== MARQUEE ===== --}}
<div class="marquee">
    <div class="marquee__track" data-marquee-track>
        <span class="marquee__item">Bioestimulantes</span>
        <span class="marquee__item">Fijación de nitrógeno</span>
        <span class="marquee__item">Aglutinantes de agua</span>
        <span class="marquee__item">Enzimas activas</span>
        <span class="marquee__item">Control biológico</span>
        <span class="marquee__item">Cultivo orgánico</span>
    </div>
</div>

{{-- ===== TECNOLOGÍA ===== --}}
<section class="tech">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">La diferencia</span>
            <h2 class="section__title">Es ciencia, no <em>magia</em>.</h2>
            <p class="section__intro">
                Cada producto de la línea Profesional nace en nuestro laboratorio, donde biotecnólogos validan cada formulación con métricas reales de campo.
            </p>
        </div>

        <div class="tech__grid reveal reveal--stagger">
            <article class="tech__card">
                <span class="tech__card-num">01</span>
                <h3 class="tech__card-title">Desarrollo en laboratorio</h3>
                <p class="tech__card-text">
                    Formulaciones diseñadas con métodos científicos. Sin recetas heredadas: cada producto se valida con pruebas controladas antes de salir al mercado.
                </p>
            </article>
            <article class="tech__card">
                <span class="tech__card-num">02</span>
                <h3 class="tech__card-title">100% natural y orgánico</h3>
                <p class="tech__card-text">
                    Microorganismos benéficos, enzimas y extractos vegetales. Cero agroquímicos sintéticos, cero residuos. Apto para certificaciones orgánicas. Aprobados por SENASA
                </p>
            </article>
            <article class="tech__card">
                <span class="tech__card-num">03</span>
                <h3 class="tech__card-title">Atención personalizada</h3>
                <p class="tech__card-text">
                    Brindamos atencion pre y post venta a grandes cultivos para asegurarnos que tengas el mejor rendimiento.
                </p>
            </article>
            <article class="tech__card">
                <span class="tech__card-num">04</span>
                <h3 class="tech__card-title">Resultados consistentes</h3>
                <p class="tech__card-text">
                    Lo que se mide se mejora. Trabajamos constantemente junto a cultivadores profesionales para validar cada ciclo y refinar protocolos.
                </p>
            </article>
        </div>
    </div>
</section>

{{-- ===== PRODUCTOS DESTACADOS ===== --}}
<section class="products" id="productos">
    <div class="container">
        <div class="products__head reveal">
            <div class="section__head section__head--left">
                <span class="eyebrow">La línea</span>
                <h2 class="section__title">Productos <em>destacados</em>.</h2>
                <p class="section__intro">
                    Cada producto cubre una etapa específica del ciclo, desarrollado para trabajar en conjunto o de manera independiente.
                </p>
            </div>
            <div class="products__head--right">
                <a href="{{ route('products.index') }}" class="btn btn--ghost">
                    Ver catálogo completo
                    <span class="btn__arrow">→</span>
                </a>
            </div>
        </div>

        <div class="products__grid reveal reveal--stagger">
            @foreach($featured as $i => $p)
                <x-product-card :product="$p" :index="$i + 1" />
            @endforeach
        </div>
    </div>
</section>

{{-- ===== LAB / NÚMEROS ===== --}}
{{--<section class="lab">--}}
{{--    <div class="container">--}}
{{--        <div class="lab__inner">--}}
{{--            <div class="lab__visual reveal">--}}
{{--                <div class="lab__visual-grid"></div>--}}
{{--                <div class="lab__visual-symbol"></div>--}}

{{--                <div class="lab__visual-stat lab__visual-stat--1">--}}
{{--                    <span class="lab__visual-stat-num">+40%</span>--}}
{{--                    <span class="lab__visual-stat-label">Retención de agua</span>--}}
{{--                </div>--}}
{{--                <div class="lab__visual-stat lab__visual-stat--2">--}}
{{--                    <span class="lab__visual-stat-num">×3</span>--}}
{{--                    <span class="lab__visual-stat-label">Microbiota activa</span>--}}
{{--                </div>--}}
{{--                <div class="lab__visual-stat lab__visual-stat--3">--}}
{{--                    <span class="lab__visual-stat-num">+25%</span>--}}
{{--                    <span class="lab__visual-stat-label">Rendimiento medio</span>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--            <div class="lab__copy reveal">--}}
{{--                <span class="eyebrow">Laboratorio Treemix</span>--}}
{{--                <h2 class="section__title" style="font-size: clamp(2.25rem, 4.5vw, 3.5rem); margin-top:1.5rem;">Datos, no promesas.</h2>--}}
{{--                <p>--}}
{{--                    Trabajamos con cultivadores profesionales que utilizan distintos mètodos  de cultivo y aplican nuestros productos en combinaciòn con diferentes planes de cultivo.--}}
{{--                </p>--}}
{{--                <p>--}}
{{--                    Nuestra línea Profesional incorpora cepas seleccionadas y concentraciones aumentadas que en la web principal no están disponibles.--}}
{{--                </p>--}}

{{--                <a href="{{ route('resultados') }}" class="btn btn--primary">--}}
{{--                    Ver resultados--}}
{{--                    <span class="btn__arrow">→</span>--}}
{{--                </a>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}

{{-- ===== CTA FINAL ===== --}}
<section class="cta">
    <div class="container reveal">
        <h2 class="cta__title">Para cultivos que <em>no se conforman</em>.</h2>
        <p class="cta__text">
            Conseguí la línea Profesional en nuestra tienda oficial o contactanos directamente para consultas de distribución y asesoramiento técnico.
        </p>
        <div class="cta__actions">
            <a href="https://www.tiendatreemix.com.ar/" target="_blank" rel="noopener" class="btn btn--primary">
                Ingresar a la tienda
                <span class="btn__arrow">→</span>
            </a>
            <a href="{{ route('contact.show') }}" class="btn btn--ghost">
                Contactar al laboratorio
            </a>
        </div>
    </div>
</section>

@endsection
