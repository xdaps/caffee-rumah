@props(['product'])

<a
    href="{{ route('products.show', $product) }}"
    class="group flex flex-col overflow-hidden rounded-3xl border border-espresso-800/8 bg-white/70 transition duration-300 hover:-translate-y-1 hover:border-mocha-600/20 hover:bg-white hover:shadow-xl hover:shadow-espresso-900/5"
>
    <x-product-art :product="$product" class="m-2 aspect-[16/10] rounded-[1.35rem]" />

    <div class="flex flex-1 flex-col px-5 pt-2 pb-5">
        <div class="flex items-center justify-between gap-3">
            <span class="text-[10px] font-semibold tracking-[0.2em] text-mocha-600 uppercase">
                {{ $product->category?->name }}
            </span>
            @if ($product->badge)
                <span class="rounded-full bg-gold-500/15 px-2.5 py-1 text-[10px] font-semibold tracking-wide text-gold-500 uppercase">
                    {{ $product->badge }}
                </span>
            @endif
        </div>

        <h3 class="mt-2 font-display text-xl leading-snug text-espresso-900">{{ $product->name }}</h3>
        <p class="mt-1 line-clamp-2 text-sm leading-relaxed text-espresso-700/65">{{ $product->description }}</p>

        <div class="mt-auto flex items-center justify-between border-t border-espresso-800/8 pt-4">
            <p class="text-sm font-semibold text-espresso-900">{{ $product->formattedPrice() }}</p>
            <span class="grid size-8 place-items-center rounded-full bg-cream-100 text-mocha-600 transition group-hover:bg-espresso-800 group-hover:text-cream-50" aria-hidden="true">
                <svg viewBox="0 0 16 16" fill="none" class="size-3.5">
                    <path d="M3 8h10m0 0L9 4m4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </span>
        </div>
    </div>
</a>
