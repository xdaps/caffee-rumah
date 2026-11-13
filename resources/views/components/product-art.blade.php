@props(['product', 'label' => true])

@php
    $palettes = [
        'kopi' => 'from-mocha-500 via-espresso-700 to-espresso-900',
        'non-kopi' => 'from-[#7a8f6a] via-[#4f6650] to-[#2d3d2f]',
        'camilan' => 'from-gold-500 via-[#b0743c] to-[#5b3418]',
    ];

    $gradient = $palettes[$product->category?->slug ?? ''] ?? $palettes['kopi'];
@endphp

<div {{ $attributes->class(['relative isolate overflow-hidden bg-linear-to-br', $gradient]) }} aria-hidden="true">
    <div
        class="absolute inset-0 opacity-[0.14]"
        style="background-image: radial-gradient(circle at 1px 1px, #fdfaf4 1px, transparent 0); background-size: 18px 18px;"
    ></div>
    <div class="absolute -top-10 -left-8 size-40 rounded-full bg-cream-50/20 blur-2xl"></div>

    <svg viewBox="0 0 120 120" fill="none" class="absolute top-1/2 left-1/2 w-[46%] max-w-24 -translate-x-1/2 -translate-y-1/2 text-cream-100">
        <path d="M45 30c-5-6 3-10-2-16" stroke="currentColor" stroke-opacity=".45" stroke-width="2.5" stroke-linecap="round" />
        <path d="M60 26c-5-6 3-10-2-16" stroke="currentColor" stroke-opacity=".35" stroke-width="2.5" stroke-linecap="round" />
        <path d="M75 30c-5-6 3-10-2-16" stroke="currentColor" stroke-opacity=".45" stroke-width="2.5" stroke-linecap="round" />

        <ellipse cx="60" cy="98" rx="42" ry="6" fill="#1f1410" fill-opacity=".3" />
        <path d="M94 60c12-1 17 5 14 13-2 7-10 10-18 8" stroke="currentColor" stroke-width="7" stroke-linecap="round" />
        <path d="M28 52h64l-5 32a10 10 0 0 1-10 9H43a10 10 0 0 1-10-9l-5-32Z" fill="currentColor" />
        <ellipse cx="60" cy="52" rx="32" ry="5.5" fill="#8a6246" />
        <ellipse cx="60" cy="51" rx="26" ry="4" fill="#dcc0a3" fill-opacity=".85" />
    </svg>

    @if ($label)
        <span class="absolute top-3 left-3 rounded-full bg-espresso-900/30 px-2.5 py-1 text-[10px] font-semibold tracking-[0.16em] text-cream-50/90 uppercase backdrop-blur-sm">
            {{ $product->category?->name }}
        </span>
    @endif
</div>
