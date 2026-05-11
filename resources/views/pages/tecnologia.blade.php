@extends('layouts.app')

@section('title', 'Tecnología · Treemix Profesional')
@section('meta_description', 'Conocé el proceso biotecnológico detrás de la línea Profesional Treemix.')

@section('content')

<section style="padding-top: 12rem; padding-bottom: 5rem;">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">El proceso</span>
            <h1 class="section__title" style="font-size: clamp(3rem, 6vw, 5rem);">De la <em>ciencia</em> al cultivo.</h1>
            <p class="section__intro">
                Cada producto recorre el mismo camino: investigación, formulación, validación y refinamiento.
            </p>
        </div>
    </div>
</section>

<section class="tech" style="padding-top: 0;">
    <div class="container">
        <div class="tech__grid reveal reveal--stagger" style="grid-template-columns: 1fr 1fr;">
            <article class="tech__card">
                <span class="tech__card-num">01</span>
                <h3 class="tech__card-title">Investigación</h3>
                <p class="tech__card-text">
                    Identificamos el problema a resolver junto a cultivadores reales. Cada producto nace de una necesidad concreta, no de una tendencia de marketing.
                </p>
            </article>
            <article class="tech__card">
                <span class="tech__card-num">02</span>
                <h3 class="tech__card-title">Aislamiento</h3>
                <p class="tech__card-text">
                    Seleccionamos cepas microbianas, enzimas o extractos vegetales con capacidad demostrada en condiciones de laboratorio.
                </p>
            </article>
            <article class="tech__card">
                <span class="tech__card-num">03</span>
                <h3 class="tech__card-title">Formulación</h3>
                <p class="tech__card-text">
                    Estabilizamos los componentes activos en formato líquido o sólido, asegurando viabilidad a lo largo de toda la vida útil del producto.
                </p>
            </article>
            <article class="tech__card">
                <span class="tech__card-num">04</span>
                <h3 class="tech__card-title">Validación de campo</h3>
                <p class="tech__card-text">
                    Pruebas con cultivadores aliados durante múltiples ciclos. Solo lo que funciona consistentemente pasa a producción.
                </p>
            </article>
            <article class="tech__card">
                <span class="tech__card-num">05</span>
                <h3 class="tech__card-title">Producción controlada</h3>
                <p class="tech__card-text">
                    Cada lote sale con control de calidad biológico. Trazabilidad completa desde la fermentación hasta el envase final.
                </p>
            </article>
            <article class="tech__card">
                <span class="tech__card-num">06</span>
                <h3 class="tech__card-title">Refinamiento continuo</h3>
                <p class="tech__card-text">
                    Recopilamos feedback de cada ciclo y mejoramos las formulaciones. Lo que sale hoy no es lo que salió hace dos años.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container reveal">
        <h2 class="cta__title">¿Querés ver los <em>resultados</em>?</h2>
        <p class="cta__text">
            Casos reales de cultivos donde la línea Profesional hizo la diferencia.
        </p>
        <div class="cta__actions">
            <a href="{{ route('resultados') }}" class="btn btn--primary">
                Ver resultados
                <span class="btn__arrow">→</span>
            </a>
        </div>
    </div>
</section>

@endsection
