@extends('layouts.app')

@section('title', 'Calculadora de Dosis · Treemix Profesional')
@section('meta_description', 'Calculá la dosis exacta de cada producto Treemix según los litros de agua por aplicación.')

@section('content')

    <section class="calc-hero">
        <div class="calc-hero__grid-bg" aria-hidden="true"></div>
        <div class="container">
            <nav class="product-detail__breadcrumb " style="margin-bottom:2rem;">
                <a href="{{ route('home') }}">Inicio</a>
                <span>/</span>
                <span>Calculadora</span>
            </nav>
            <div class="section__head section__head--left ">
                <span class="eyebrow">Herramienta profesional</span>
                <h1 class="section__title">Calculadora de <em>dosis</em>.</h1>
                <p class="section__intro">
                    Seleccioná los productos, elegí el modo de aplicación y la dosis, ingresá los litros de agua y obtené la cantidad exacta al instante.
                </p>
            </div>
        </div>
    </section>

    <section class="calc-main">
        <div class="container">
            <div class="calc-layout">

                {{-- LEFT: CONTROLS --}}
                <aside class="calc-controls ">
                    <div class="calc-card">
                        <div class="calc-card__head">
                            <h2 class="calc-card__title">Productos</h2>
                            <div style="display:flex;align-items:center;gap:.5rem;">
                                <button class="calc-text-btn" id="selectAll">Todos</button>
                                <span style="color:var(--silver-700);font-size:.75rem;">·</span>
                                <button class="calc-text-btn" id="selectNone">Ninguno</button>
                            </div>
                        </div>

                        <ul class="calc-product-list" role="list">
                            @foreach($products as $product)
                                <li>
                                    <label class="calc-product" data-slug="{{ $product['slug'] }}">
                                        <input type="checkbox" class="calc-product__checkbox sr-only" value="{{ $product['slug'] }}" checked>
                                        <span class="calc-product__check" aria-hidden="true"></span>
                                        <span class="calc-product__info">
                                    <span class="calc-product__name">{{ $product['name'] }}</span>
                                    @if(isset($product['application_schedule']))
                                                <span class="calc-product__meta">{{ $product['application_schedule']['stage'] }} · {{ $product['application_schedule']['frequency'] }}</span>
                                            @endif
                                </span>
                                        @if(!empty($product['badge']))
                                            <span class="calc-badge calc-badge--{{ $product['badge'] }}">{{ $product['badge'] }}</span>
                                        @endif
                                    </label>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </aside>

                {{-- RIGHT: RESULTS --}}
                <div class="calc-results ">
                    <div class="calc-card calc-card--results">
                        <div class="calc-card__head">
                            <h2 class="calc-card__title">Tabla de dosis</h2>
                            <div class="calc-summary">
                                <div class="calc-summary__item">
                                    <span class="calc-summary__num" id="summaryProducts">—</span>
                                    <span class="calc-summary__label">productos</span>
                                </div>
                                <div class="calc-summary__sep"></div>
                                <div class="calc-summary__item">
                                    <span class="calc-summary__num" id="summaryTotal">—</span>
                                    <span class="calc-summary__label">ml totales</span>
                                </div>
                            </div>
                        </div>

                        <div class="calc-table-wrap">
                            <table class="calc-table" id="calcTable">
                                <thead>
                                <tr>
                                    <th>Producto</th>
                                    <th>Aplicación</th>
                                    <th>Dosis</th>
                                    <th class="text-right">ml / L</th>
                                    <th class="text-right">Litros agua</th>
                                    <th class="text-right">Aplicaciones</th>
                                    <th class="text-right">Total a usar</th>
                                    <th>Etapa</th>
                                </tr>
                                </thead>
                                <tbody id="calcTableBody"></tbody>
                            </table>
                        </div>

                        <div class="calc-empty" id="calcEmpty">
                            <span class="calc-empty__icon" aria-hidden="true">◎</span>
                            <p>Seleccioná al menos un producto para ver los cálculos.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <script id="productData" type="application/json">{!! json_encode($products, JSON_UNESCAPED_UNICODE) !!}</script>

    <style>
        .calc-hero { padding-top: clamp(8rem, 14vw, 12rem); padding-bottom: 2rem; position: relative; overflow: hidden; }
        .calc-hero::before { content: ''; position: absolute; inset: 0; pointer-events: none; }
        .calc-hero__grid-bg { position: absolute; inset: 0; background-image: linear-gradient(rgba(200, 200, 208, 0.025) 1px, transparent 1px), linear-gradient(90deg, rgba(200, 200, 208, 0.025) 1px, transparent 1px); background-size: 80px 80px; mask-image: radial-gradient(ellipse at 70% 0%, black 30%, transparent 75%); -webkit-mask-image: radial-gradient(ellipse at 70% 0%, black 30%, transparent 75%); pointer-events: none; }
        .calc-main { padding-bottom: var(--section-pad); position: relative; }
        .calc-main::before { content: ''; position: absolute; inset: 0; pointer-events: none; }
        .calc-layout { display: grid; grid-template-columns: 340px 1fr; gap: 1.75rem; align-items: start; position: relative; z-index: 1; }
        .sr-only { position: absolute; width: 1px; height: 1px; padding: 0; overflow: hidden; clip: rect(0, 0, 0, 0); white-space: nowrap; border: 0; }
        .calc-card { background: linear-gradient(160deg, rgba(31, 31, 36, 0.75), rgba(10, 10, 11, 0.55)); border: var(--hairline); border-radius: var(--radius-lg); padding: 2rem; margin-bottom: 1.5rem; position: relative; overflow: hidden; backdrop-filter: blur(12px); }
        .calc-card--results { margin-bottom: 0; }
        .calc-card__head { display: flex; justify-content: space-between; align-items: center; gap: 1rem; margin-bottom: 1.75rem; flex-wrap: wrap; }
        .calc-card__title { font-family: var(--font-display); font-size: 1.35rem; font-weight: 400; color: var(--silver-100); letter-spacing: -0.01em; line-height: 1.1; }
        .calc-text-btn { font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.22em; color: var(--silver-500); font-weight: 600; transition: color 0.25s; padding: 0.25rem 0; background: none; border: none; cursor: pointer; }
        .calc-text-btn:hover { color: var(--silver-100); }
        .calc-product-list { list-style: none; display: flex; flex-direction: column; gap: 0.35rem; }
        .calc-product { display: flex; align-items: center; gap: 0.875rem; padding: 0.75rem 0.875rem; border-radius: var(--radius-md); border: 1px solid transparent; cursor: pointer; transition: all 0.3s; user-select: none; }
        .calc-product:hover { background: rgba(200, 200, 208, 0.04); border-color: rgba(200, 200, 208, 0.1); }
        .calc-product.is-checked { background: rgba(200, 200, 208, 0.03); border-color: rgba(200, 200, 208, 0.1); }
        .calc-product__check { width: 20px; height: 20px; border-radius: 5px; border: 1px solid rgba(200, 200, 208, 0.22); background: rgba(8, 8, 9, 0.6); flex-shrink: 0; position: relative; transition: all 0.3s; overflow: hidden; }
        .calc-product__check::before { content: ''; position: absolute; inset: 0; background: var(--silver-gradient); opacity: 0; transition: opacity 0.25s; }
        .calc-product__check::after { content: ''; position: absolute; top: 50%; left: 50%; width: 5px; height: 9px; border-right: 1.5px solid var(--bg-void); border-bottom: 1.5px solid var(--bg-void); transform: translate(-50%, -60%) rotate(45deg); opacity: 0; transition: opacity 0.2s 0.05s; }
        .calc-product.is-checked .calc-product__check { border-color: transparent; }
        .calc-product.is-checked .calc-product__check::before { opacity: 1; }
        .calc-product.is-checked .calc-product__check::after { opacity: 1; }
        .calc-product__info { flex: 1; min-width: 0; }
        .calc-product__name { display: block; font-size: 0.875rem; font-weight: 500; color: var(--silver-200); white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }
        .calc-product.is-checked .calc-product__name { color: var(--silver-100); }
        .calc-product__meta { display: block; font-size: 0.68rem; color: var(--silver-600); text-transform: uppercase; letter-spacing: 0.14em; margin-top: 2px; }
        .calc-badge { font-size: 0.58rem; text-transform: uppercase; letter-spacing: 0.16em; padding: 0.25rem 0.6rem; border-radius: 999px; border: 1px solid rgba(200, 200, 208, 0.14); color: var(--silver-500); flex-shrink: 0; font-weight: 600; }
        .calc-badge--exclusivo, .calc-badge--limitado { border-color: rgba(46, 204, 64, 0.3); color: var(--leaf-bright); }
        .calc-badge--eco { border-color: rgba(46, 204, 64, 0.2); color: #7dcc8a; }
        .calc-summary { display: flex; align-items: center; gap: 1rem; }
        .calc-summary__item { text-align: right; }
        .calc-summary__num { display: block; font-family: var(--font-display); font-style: italic; font-size: 1.5rem; font-weight: 300; background: var(--silver-gradient); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; line-height: 1; }
        .calc-summary__label { font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.2em; color: var(--silver-600); font-weight: 500; }
        .calc-summary__sep { width: 1px; height: 2rem; background: rgba(200, 200, 208, 0.12); display: block; flex-shrink: 0; }
        .calc-table-wrap { overflow-x: auto; -webkit-overflow-scrolling: touch; }
        .calc-table { width: 100%; border-collapse: collapse; font-size: 0.875rem; }
        .calc-table thead th { font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.22em; color: var(--silver-600); font-weight: 600; padding: 0 0.875rem 1rem; border-bottom: var(--hairline); white-space: nowrap; }
        .calc-table thead th:first-child { padding-left: 0; }
        .calc-table thead th.text-right { text-align: right; }
        .calc-table tbody tr { border-bottom: var(--hairline); transition: background 0.2s; }
        .calc-table tbody tr:last-child { border-bottom: none; }
        .calc-table tbody tr:hover { background: rgba(200, 200, 208, 0.025); }
        .calc-table tbody td { padding: 1rem 0.875rem; color: var(--silver-300); vertical-align: middle; }
        .calc-table tbody td:first-child { padding-left: 0; }
        .calc-table tbody td.text-right { text-align: right; }
        .ct-name { font-weight: 600; color: var(--silver-100); display: block; white-space: nowrap; }
        .ct-num { font-family: var(--font-display); font-style: italic; font-size: 1.1rem; font-weight: 300; background: var(--silver-gradient); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; white-space: nowrap; }
        .ct-total { font-family: var(--font-display); font-style: italic; font-size: 1.3rem; font-weight: 300; background: var(--silver-gradient); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent; white-space: nowrap; }
        .ct-stage { display: inline-flex; align-items: center; font-size: 0.68rem; text-transform: uppercase; letter-spacing: 0.14em; font-weight: 600; padding: 0.3rem 0.75rem; border-radius: 999px; border: 1px solid rgba(200, 200, 208, 0.15); color: var(--silver-400); white-space: nowrap; }
        .ct-stage--vegetativo { border-color: rgba(46, 204, 64, 0.35); color: #5ddc70; }
        .ct-stage--floracion { border-color: rgba(224, 168, 110, 0.4); color: #e0a86e; }
        .ct-stage--engorde { border-color: rgba(200, 138, 223, 0.35); color: #c88adf; }
        .ct-stage--trasplante { border-color: rgba(110, 206, 224, 0.35); color: #6ecee0; }
        .ct-stage--ciclo { border-color: rgba(200, 200, 208, 0.2); color: var(--silver-300); }
        .calc-empty { padding: 3.5rem 2rem; text-align: center; color: var(--silver-600); display: none; font-size: 0.9375rem; line-height: 1.6; }
        .calc-empty.visible { display: block; }
        .calc-empty__icon { display: block; font-size: 2.25rem; margin-bottom: 1rem; opacity: 0.3; }
        .calc-input {
            background: rgba(10, 10, 11, 0.7) !important;
            border: 1px solid rgba(200, 200, 208, 0.16) !important;
            border-radius: 6px !important;
            color: var(--silver-100) !important;
            padding: 0.55rem 0.75rem !important;
            font-family: var(--font-display) !important;
            font-size: 0.95rem !important;
            font-style: italic !important;
            font-weight: 300 !important;
            transition: all 0.3s !important;
            text-align: center !important;
            width: 90px !important;
        }
        .calc-input:hover {
            border-color: rgba(200, 200, 208, 0.28) !important;
            background: rgba(20, 20, 25, 0.8) !important;
        }
        .calc-input:focus {
            outline: none !important;
            border-color: rgba(200, 200, 208, 0.4) !important;
            background: rgba(20, 20, 25, 0.9) !important;
            box-shadow: 0 0 0 3px rgba(200, 200, 208, 0.1), inset 0 0 12px rgba(200, 200, 208, 0.04) !important;
        }
        .calc-input::-webkit-outer-spin-button,
        .calc-input::-webkit-inner-spin-button {
            -webkit-appearance: none !important;
            margin: 0 !important;
        }
        .calc-input[type=number] {
            -moz-appearance: textfield !important;
        }

        /* Controles segmentados (Aplicación / Dosis) */
        .ct-seg { display: inline-flex; border: 1px solid rgba(200, 200, 208, 0.16); border-radius: 8px; overflow: hidden; background: rgba(10, 10, 11, 0.6); }
        .ct-seg__btn { appearance: none; background: transparent; border: none; border-left: 1px solid rgba(200, 200, 208, 0.1); color: var(--silver-500); font-size: 0.68rem; font-weight: 600; letter-spacing: 0.08em; text-transform: uppercase; padding: 0.4rem 0.6rem; cursor: pointer; transition: all 0.25s; white-space: nowrap; line-height: 1; }
        .ct-seg__btn:first-child { border-left: none; }
        .ct-seg__btn:hover:not(:disabled):not(.is-active) { color: var(--silver-200); background: rgba(200, 200, 208, 0.05); }
        .ct-seg__btn.is-active { background: var(--silver-gradient); color: var(--bg-void); }
        .ct-seg__btn:disabled { opacity: 0.25; cursor: not-allowed; color: var(--silver-700); }
        .ct-method-static { font-size: 0.7rem; text-transform: uppercase; letter-spacing: 0.12em; color: var(--silver-500); font-weight: 600; white-space: nowrap; }

        @media (max-width: 860px) { .calc-layout { grid-template-columns: 1fr; } }
        @media (max-width: 600px) { .calc-card { padding: 1.5rem; } .calc-table thead th, .calc-table tbody td { padding-left: 0.5rem; padding-right: 0.5rem; } }
    </style>

    <script>
        (function () {
            'use strict';

            const PRODUCTS = JSON.parse(document.getElementById('productData').textContent);
            window.productsData = PRODUCTS;

            const LEVELS = ['min', 'med', 'max'];
            const LEVEL_LABELS = { min: 'Mín', med: 'Med', max: 'Máx' };
            const METHODS = ['radicular', 'foliar'];
            const METHOD_LABELS = { radicular: 'Radicular', foliar: 'Foliar' };

            const tableBody = document.getElementById('calcTableBody');
            const calcTable = document.getElementById('calcTable');
            const calcEmpty = document.getElementById('calcEmpty');
            const summaryProducts = document.getElementById('summaryProducts');
            const summaryTotal = document.getElementById('summaryTotal');

            // Estado por producto: slug -> { method, level, water, apps }
            const state = new Map();

            /* ---------- helpers de formato ---------- */
            function formatMl(ml) {
                if (ml <= 0) return '0 ml';
                if (ml >= 1000) return (ml / 1000).toFixed(3).replace(/\.?0+$/, '') + ' L';
                if (ml < 1) return ml.toFixed(3).replace(/\.?0+$/, '') + ' ml';
                return ml.toFixed(2).replace(/\.?0+$/, '') + ' ml';
            }

            function stageKey(stage) {
                if (!stage) return 'ciclo';
                const s = stage.toLowerCase().trim();
                if (s.includes('vegeta')) return 'vegetativo';
                if (s.includes('flora')) return 'floracion';
                if (s.includes('engorde')) return 'engorde';
                if (s.includes('trasplan')) return 'trasplante';
                if (s.includes('todo')) return 'ciclo';
                return s.replace(/\s+/g, '-');
            }

            function stageCssClass(key) {
                const map = { vegetativo: 'vegetativo', floracion: 'floracion', engorde: 'engorde', trasplante: 'trasplante', puntual: 'puntual', ciclo: 'ciclo' };
                return map[key] || 'ciclo';
            }

            function stageDisplay(raw) {
                if (!raw) return '—';
                const lower = raw.toLowerCase().trim();
                if (lower.includes('todo')) return 'Todo el ciclo';
                return raw.charAt(0).toUpperCase() + raw.slice(1);
            }

            function escHtml(str) {
                return String(str).replace(/&/g, '&amp;').replace(/</g, '&lt;').replace(/>/g, '&gt;').replace(/"/g, '&quot;');
            }

            /* ---------- helpers de dosis ---------- */
            function getMatrix(product) {
                return product.dosage_matrix || null;
            }

            function hasValue(matrix, method, level) {
                return !!(matrix && matrix[method] && matrix[method][level] != null && matrix[method][level] > 0);
            }

            function availableMethods(matrix) {
                return METHODS.filter(m => LEVELS.some(l => hasValue(matrix, m, l)));
            }

            function availableLevels(matrix, method) {
                return LEVELS.filter(l => hasValue(matrix, method, l));
            }

            // Elige un método válido, respetando la preferencia previa si sigue disponible.
            function pickMethod(matrix, preferred) {
                const methods = availableMethods(matrix);
                if (preferred && methods.includes(preferred)) return preferred;
                if (methods.includes('radicular')) return 'radicular';
                return methods[0] || 'radicular';
            }

            // Elige un nivel válido para el método dado (prioriza med > min > max).
            function pickLevel(matrix, method, preferred) {
                const levels = availableLevels(matrix, method);
                if (preferred && levels.includes(preferred)) return preferred;
                if (levels.includes('med')) return 'med';
                if (levels.includes('min')) return 'min';
                if (levels.includes('max')) return 'max';
                return levels[0] || 'med';
            }

            // Resuelve ml/L según método + nivel; cae al valor legacy si no hay matriz.
            function resolveMlPerL(product, method, level) {
                const matrix = getMatrix(product);
                if (hasValue(matrix, method, level)) return matrix[method][level];
                return (product.dosage && product.dosage.ml_per_liter) || 0;
            }

            function getDefaultApps(product) {
                const apps = product.dosage && product.dosage.applications;
                return typeof apps === 'number' ? apps : 1;
            }

            // Garantiza estado para un producto, re-validando método/nivel contra lo disponible.
            function ensureState(product) {
                const matrix = getMatrix(product);
                let s = state.get(product.slug);
                if (!s) {
                    const method = pickMethod(matrix, null);
                    const level = pickLevel(matrix, method, null);
                    s = { method: method, level: level, water: 0, apps: getDefaultApps(product) };
                    state.set(product.slug, s);
                } else {
                    s.method = pickMethod(matrix, s.method);
                    s.level = pickLevel(matrix, s.method, s.level);
                }
                return s;
            }

            function getChecked() {
                return [...document.querySelectorAll('.calc-product__checkbox')].filter(cb => cb.checked).map(cb => cb.value);
            }

            function syncProductVisual(label) {
                const cb = label.querySelector('.calc-product__checkbox');
                label.classList.toggle('is-checked', cb.checked);
            }

            /* ---------- render de controles ---------- */
            function methodControl(product, s) {
                const matrix = getMatrix(product);
                const methods = availableMethods(matrix);
                if (methods.length <= 1) {
                    const only = methods[0] || null;
                    return `<span class="ct-method-static">${only ? METHOD_LABELS[only] : '—'}</span>`;
                }
                return `<div class="ct-seg ct-seg--method" role="group" aria-label="Método de aplicación">` +
                    methods.map(m => `<button type="button" class="ct-seg__btn${m === s.method ? ' is-active' : ''}" data-slug="${product.slug}" data-method="${m}">${METHOD_LABELS[m]}</button>`).join('') +
                    `</div>`;
            }

            function levelControl(product, s) {
                const matrix = getMatrix(product);
                return `<div class="ct-seg ct-seg--level" role="group" aria-label="Nivel de dosis">` +
                    LEVELS.map(l => {
                        const enabled = hasValue(matrix, s.method, l);
                        const active = enabled && l === s.level;
                        return `<button type="button" class="ct-seg__btn${active ? ' is-active' : ''}" data-slug="${product.slug}" data-level="${l}"${enabled ? '' : ' disabled'}>${LEVEL_LABELS[l]}</button>`;
                    }).join('') +
                    `</div>`;
            }

            /* ---------- render principal ---------- */
            function update() {
                const slugs = getChecked();
                const active = PRODUCTS.filter(p => slugs.includes(p.slug));

                if (active.length === 0) {
                    calcTable.hidden = true;
                    calcEmpty.classList.add('visible');
                    summaryProducts.textContent = '0';
                    summaryTotal.textContent = '—';
                    return;
                }

                calcTable.hidden = false;
                calcEmpty.classList.remove('visible');

                let rows = '';

                active.forEach(product => {
                    const s = ensureState(product);
                    const schedule = product.application_schedule || {};
                    const sk = stageKey(schedule.stage);
                    const sc = stageCssClass(sk);
                    const sdisplay = stageDisplay(schedule.stage);
                    const mlPerL = resolveMlPerL(product, s.method, s.level);

                    rows += `
            <tr>
                <td><span class="ct-name">${escHtml(product.name)}</span></td>
                <td>${methodControl(product, s)}</td>
                <td>${levelControl(product, s)}</td>
                <td class="text-right"><span class="ct-num ct-mlperl" data-slug="${product.slug}">${mlPerL}</span></td>
                <td class="text-right">
                    <input type="number" class="calc-input calc-water-input" data-slug="${product.slug}" value="${s.water}" min="0" step="0.5" placeholder="0">
                </td>
                <td class="text-right">
                    <input type="number" class="calc-input calc-apps-input" data-slug="${product.slug}" value="${s.apps}" min="0" step="1" placeholder="0">
                </td>
                <td class="text-right"><span class="ct-total calc-result" data-slug="${product.slug}">0 ml</span></td>
                <td><span class="ct-stage ct-stage--${sc}">${escHtml(sdisplay)}</span></td>
            </tr>`;
                });

                tableBody.innerHTML = rows;
                summaryProducts.textContent = active.length;

                bindRowEvents();
                calculateTotal();
            }

            /* ---------- eventos de cada fila ---------- */
            function bindRowEvents() {
                document.querySelectorAll('.calc-water-input').forEach(input => {
                    input.addEventListener('input', () => {
                        const s = state.get(input.dataset.slug);
                        if (s) s.water = parseFloat(input.value) || 0;
                        calculateTotal();
                    });
                });

                document.querySelectorAll('.calc-apps-input').forEach(input => {
                    input.addEventListener('input', () => {
                        const s = state.get(input.dataset.slug);
                        if (s) s.apps = parseFloat(input.value) || 0;
                        calculateTotal();
                    });
                });

                // Cambio de método: re-renderiza para refrescar qué niveles quedan habilitados.
                document.querySelectorAll('.ct-seg--method .ct-seg__btn').forEach(btn => {
                    btn.addEventListener('click', () => {
                        const slug = btn.dataset.slug;
                        const product = PRODUCTS.find(p => p.slug === slug);
                        const s = state.get(slug);
                        if (!product || !s) return;
                        s.method = btn.dataset.method;
                        s.level = pickLevel(getMatrix(product), s.method, s.level);
                        update();
                    });
                });

                // Cambio de nivel: actualización parcial (sin re-render completo).
                document.querySelectorAll('.ct-seg--level .ct-seg__btn').forEach(btn => {
                    btn.addEventListener('click', () => {
                        if (btn.disabled) return;
                        const slug = btn.dataset.slug;
                        const s = state.get(slug);
                        const product = PRODUCTS.find(p => p.slug === slug);
                        if (!s || !product) return;

                        s.level = btn.dataset.level;

                        const group = btn.closest('.ct-seg--level');
                        group.querySelectorAll('.ct-seg__btn').forEach(b => b.classList.toggle('is-active', b === btn));

                        const mlEl = document.querySelector(`.ct-mlperl[data-slug="${slug}"]`);
                        if (mlEl) mlEl.textContent = resolveMlPerL(product, s.method, s.level);

                        calculateTotal();
                    });
                });
            }

            /* ---------- cálculo de totales ---------- */
            function calculateTotal() {
                let grandTotal = 0;

                state.forEach((s, slug) => {
                    const resultEl = document.querySelector(`.calc-result[data-slug="${slug}"]`);
                    if (!resultEl) return; // producto no visible (destildado)

                    const product = PRODUCTS.find(p => p.slug === slug);
                    if (!product) return;

                    const mlPerL = resolveMlPerL(product, s.method, s.level);
                    const totalMl = mlPerL * (s.water || 0) * (s.apps || 0);

                    resultEl.textContent = formatMl(totalMl);
                    grandTotal += totalMl;
                });

                summaryTotal.textContent = formatMl(grandTotal);
            }

            /* ---------- controles superiores ---------- */
            document.getElementById('selectAll').addEventListener('click', () => {
                document.querySelectorAll('.calc-product__checkbox').forEach(cb => {
                    cb.checked = true;
                    syncProductVisual(cb.closest('.calc-product'));
                });
                update();
            });

            document.getElementById('selectNone').addEventListener('click', () => {
                document.querySelectorAll('.calc-product__checkbox').forEach(cb => {
                    cb.checked = false;
                    syncProductVisual(cb.closest('.calc-product'));
                });
                update();
            });

            document.querySelectorAll('.calc-product').forEach(label => {
                syncProductVisual(label);
                label.addEventListener('change', () => {
                    syncProductVisual(label);
                    update();
                });
            });

            update();
        })();
    </script>

@endsection