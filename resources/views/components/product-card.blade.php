@props(['product', 'index' => null])

@php
    $badgeLabels = [
        'exclusivo' => 'Exclusivo',
        'limitado' => 'Edición limitada',
        'eco' => 'Eco-friendly',
        'organico' => '100% Orgánico',
        'premium' => 'Premium',
        'floracion' => 'Floración',
        'kit' => 'Kit completo',
    ];
    $badge = $product['badge'] ?? null;
    $badgeLabel = $badge && isset($badgeLabels[$badge]) ? $badgeLabels[$badge] : null;
@endphp

<article class="product-card" data-product-card>
    <span class="product-card__glow" aria-hidden="true"></span>

    @if($badgeLabel)
        <span class="product-card__badge product-card__badge--{{ $badge }}">{{ $badgeLabel }}</span>
    @endif

    <div>
        @if($index !== null)
            <span class="product-card__num">{{ str_pad((string)$index, 2, '0', STR_PAD_LEFT) }} / Profesional</span>
        @endif
        <h3 class="product-card__name">{{ $product['name'] }}</h3>
        @if(!empty($product['tagline']))
            <span class="product-card__tagline">{{ $product['tagline'] }}</span>
        @endif
        <p class="product-card__short">{{ $product['short'] }}</p>
    </div>

    <a href="{{ route('products.show', $product['slug']) }}" class="product-card__link">
        Ver producto
        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round">
            <path d="M5 12h14M13 6l6 6-6 6"/>
        </svg>
    </a>
</article>
