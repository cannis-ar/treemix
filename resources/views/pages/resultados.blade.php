@extends('layouts.app')

@section('title', 'Resultados · Treemix Profesional')
@section('meta_description', 'Resultados de cultivos reales con productos Treemix Profesional.')

@section('content')

<section style="padding-top: 12rem; padding-bottom: 5rem;">
    <div class="container">
        <div class="section__head reveal">
            <span class="eyebrow">Casos reales</span>
            <h1 class="section__title" style="font-size: clamp(3rem, 6vw, 5rem);">Resultados <em>medibles</em>.</h1>
            <p class="section__intro">
                Lo que se mide se mejora. Cada métrica nace de un ciclo real con un cultivador real, no de un estudio de marketing.
            </p>
        </div>
    </div>
</section>

<section class="lab" style="padding-top: 0;">
    <div class="container">
        <div class="tech__grid reveal reveal--stagger" style="grid-template-columns: repeat(3, 1fr);">
            <article class="tech__card" style="text-align: center;">
                <span class="tech__card-num" style="font-size: 4.5rem;">+40<small style="font-size:1.5rem; font-style:normal;">%</small></span>
                <h3 class="tech__card-title">Retención hídrica</h3>
                <p class="tech__card-text">
                    Cultivos tratados con BioDrop muestran una reducción del consumo de agua de hasta un 40% manteniendo igual o mayor rendimiento.
                </p>
            </article>
            <article class="tech__card" style="text-align: center;">
                <span class="tech__card-num" style="font-size: 4.5rem;">×3</span>
                <h3 class="tech__card-title">Microbiota activa</h3>
                <p class="tech__card-text">
                    Aplicaciones regulares de ZYM triplican el conteo de microorganismos benéficos en sustrato.
                </p>
            </article>
            <article class="tech__card" style="text-align: center;">
                <span class="tech__card-num" style="font-size: 4.5rem;">+25<small style="font-size:1.5rem; font-style:normal;">%</small></span>
                <h3 class="tech__card-title">Rendimiento medio</h3>
                <p class="tech__card-text">
                    Cultivadores que aplican el protocolo completo reportan un aumento promedio de rendimiento de 25%.
                </p>
            </article>
        </div>
    </div>
</section>

<section class="cta">
    <div class="container reveal">
        <h2 class="cta__title">Compartí <em>tus</em> resultados.</h2>
        <p class="cta__text">
            ¿Usás la línea Profesional y querés que documentemos tu caso? Hablemos.
        </p>
        <div class="cta__actions">
            <a href="{{ route('contact.show') }}" class="btn btn--primary">
                Contactar
                <span class="btn__arrow">→</span>
            </a>
        </div>
    </div>
</section>

@endsection
