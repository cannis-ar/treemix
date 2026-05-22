@extends('layouts.app')

@section('title', 'Nosotros · Treemix Profesional')
@section('meta_description', 'Conocé a Treemix: 8 años de experiencia en biotecnología aplicada al cultivo. Laboratorio propio, fórmulas exclusivas y productos veganos, agroecológicos y cruelty free.')

@section('content')

    {{-- HERO --}}
    <section style="padding-top: 12rem; padding-bottom: 6rem; background: var(--dark-radial); position: relative; overflow: hidden;">
        <div style="position: absolute; inset: 0; background-image: radial-gradient(ellipse 60% 50% at 50% 0%, rgba(46,204,64,0.07), transparent 70%); pointer-events: none;"></div>
        <div style="
        position: absolute;
        inset: 0;
        background-image:
            linear-gradient(rgba(200,200,208,0.03) 1px, transparent 1px),
            linear-gradient(90deg, rgba(200,200,208,0.03) 1px, transparent 1px);
        background-size: 80px 80px;
        mask-image: radial-gradient(ellipse at center, black 40%, transparent 80%);
        -webkit-mask-image: radial-gradient(ellipse at center, black 40%, transparent 80%);
        pointer-events: none;
    "></div>
        <div class="container">
            <div class="reveal" style="max-width: 760px;">
                <span class="eyebrow" style="margin-bottom: 2rem; display: inline-flex;">Bienvenidos a Treemix</span>
                <h1 class="section__title" style="font-size: clamp(3rem, 7vw, 5.5rem); margin-bottom: 2rem;">
                    Biotecnología aplicada<br>al <em>cultivo real</em>.
                </h1>
                <p class="section__intro" style="margin: 0; font-size: 1.125rem;">
                    Desarrollamos productos biológicos, orgánicos y biominerales con fórmulas exclusivas e innovadoras.
                    Pioneros en composiciones que no se consiguen en el mercado convencional.
                </p>
            </div>
        </div>
    </section>

    {{-- POR QUÉ TREEMIX --}}
    <section style="padding-top: var(--section-pad); padding-bottom: var(--section-pad);">
        <div class="container">
            <div class="section__head section__head--left reveal" style="margin-bottom: 4rem;">
                <span class="eyebrow">Nuestro diferencial</span>
                <h2 class="section__title">¿Por qué <em>Tree Mix</em>?</h2>
            </div>

            <div class="tech__grid reveal reveal--stagger">
                <div class="tech__card">
                    <span class="tech__card-num">01</span>
                    <h3 class="tech__card-title">Profesionalismo</h3>
                    <p class="tech__card-text">
                        Elaboramos nuestros productos con un alto nivel de especialidad, utilizando tecnologías avanzadas en nuestros laboratorios.
                        Podés ver nuestros procesos en detalle en los videos disponibles en nuestras redes sociales.
                    </p>
                </div>
                <div class="tech__card">
                    <span class="tech__card-num">02</span>
                    <h3 class="tech__card-title">Trayectoria</h3>
                    <p class="tech__card-text">
                        Contamos con 8 años de experiencia en el mercado, lo que nos ha permitido perfeccionar nuestras fórmulas y procesos
                        para satisfacer las necesidades de nuestros clientes ciclo tras ciclo.
                    </p>
                </div>
                <div class="tech__card">
                    <span class="tech__card-num">03</span>
                    <h3 class="tech__card-title">Precios competitivos</h3>
                    <p class="tech__card-text">
                        Nos esforzamos por ofrecer precios accesibles sin comprometer la calidad de nuestros productos.
                        Biotecnología de laboratorio al alcance de cada cultivador.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- VALORES / IDENTIDAD --}}
    <section style="padding-top: 0; padding-bottom: var(--section-pad);">
        <div class="container">
            <div style="
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 1px;
            background: rgba(200,200,208,0.08);
            border-radius: var(--radius-lg);
            overflow: hidden;
            border: var(--hairline);
        " class="reveal reveal--stagger">
                <div style="background: var(--bg-coal); padding: 2.5rem 2rem; text-align: center;">
                    <span class="tech__card-num" style="display: block; text-align: center;">3</span>
                    <p style="color: var(--silver-100); font-size: 1rem; font-weight: 500; margin-bottom: 0.5rem;">Tipos de composición</p>
                    <p style="color: var(--silver-500); font-size: 0.875rem;">Orgánicos · Biológicos · Biominerales</p>
                </div>
                <div style="background: var(--bg-coal); padding: 2.5rem 2rem; text-align: center;">
                    <span class="tech__card-num" style="display: block; text-align: center;">8</span>
                    <p style="color: var(--silver-100); font-size: 1rem; font-weight: 500; margin-bottom: 0.5rem;">Años de experiencia</p>
                    <p style="color: var(--silver-500); font-size: 0.875rem;">Perfeccionando fórmulas ciclo a ciclo</p>
                </div>
                <div style="background: var(--bg-coal); padding: 2.5rem 2rem; text-align: center;">
                    <span class="tech__card-num" style="display: block; text-align: center;">100%</span>
                    <p style="color: var(--silver-100); font-size: 1rem; font-weight: 500; margin-bottom: 0.5rem;">Veganos y cruelty free</p>
                    <p style="color: var(--silver-500); font-size: 0.875rem;">Agroecológicos por convicción</p>
                </div>
            </div>
        </div>
    </section>

    {{-- LÍNEA DE PRODUCTOS (intro) --}}
    <section style="padding-top: 0; padding-bottom: var(--section-pad);">
        <div class="container">
            <div style="
            background: linear-gradient(135deg, rgba(31,31,36,0.6), rgba(10,10,11,0.4));
            border: var(--hairline-bright);
            border-radius: var(--radius-lg);
            padding: clamp(2rem, 4vw, 3.5rem);
            position: relative;
            overflow: hidden;
        " class="reveal">
                <div style="
                position: absolute;
                top: 0; right: 0;
                width: 50%; height: 100%;
                background: radial-gradient(circle at 80% 50%, rgba(46,204,64,0.05), transparent 60%);
                pointer-events: none;
            "></div>
                <div style="max-width: 640px; position: relative; z-index: 1;">
                    <span class="eyebrow" style="margin-bottom: 1.5rem; display: inline-flex;">La línea profesional</span>
                    <h2 class="section__title" style="font-size: clamp(2rem, 4vw, 3rem); margin-bottom: 1.5rem;">
                        Fórmulas <em>exclusivas</em> que no encontrás en ningún otro lado.
                    </h2>
                    <p style="color: var(--silver-400); font-size: 1rem; line-height: 1.75; margin-bottom: 2rem;">
                        La diversidad de composiciones permite que cada cultivador arme un plan de cultivo completo
                        o elija únicamente los productos que se adapten a su metodología.
                        Todos nuestros productos son veganos, agroecológicos y cruelty free, con registros que respaldan su formulación.
                    </p>
                    <a href="{{ route('products.index') }}" class="btn btn--primary">
                        Ver catálogo completo
                        <span class="btn__arrow">→</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA CONTACTO --}}
    <section class="cta">
        <div class="container reveal">
            <h2 class="cta__title">¿Tenés alguna <em>consulta</em>?</h2>
            <p class="cta__text">
                Nuestro equipo está disponible para ayudarte a elegir los productos correctos y armar el protocolo ideal para tu cultivo.
            </p>
            <div class="cta__actions">
                <a href="{{ route('contact.show') }}" class="btn btn--primary">
                    Contactar al laboratorio
                    <span class="btn__arrow">→</span>
                </a>
                <a href="{{ route('products.index') }}" class="btn btn--ghost">
                    Ver productos
                </a>
            </div>
        </div>
    </section>

@endsection