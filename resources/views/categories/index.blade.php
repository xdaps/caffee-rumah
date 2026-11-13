@extends('layouts.app')

@section('title', 'Menu & Kategori — Caffee Rumah')
@section('description', 'Jelajahi kategori kopi, non-kopi, dan camilan di Caffee Rumah. Semua dibuat saat dipesan.')

@section('content')
    @php
        $categoryPalettes = [
            'kopi' => 'from-mocha-500 via-espresso-700 to-espresso-900',
            'non-kopi' => 'from-[#7a8f6a] via-[#4f6650] to-[#2d3d2f]',
            'camilan' => 'from-gold-500 via-[#b0743c] to-[#5b3418]',
        ];
    @endphp

    <section class="relative overflow-hidden border-b border-espresso-800/10 bg-cream-100/40">
        <div class="pointer-events-none absolute inset-0 -z-10">
            <div class="absolute -top-32 right-0 size-96 rounded-full bg-latte-300/30 blur-3xl"></div>
            <div class="absolute -bottom-40 -left-20 size-96 rounded-full bg-gold-500/10 blur-3xl"></div>
        </div>

        <div class="mx-auto max-w-6xl px-5 py-14 sm:px-8 lg:py-20">
            <nav class="flex items-center gap-2 text-xs text-espresso-700/60" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="transition hover:text-espresso-900">Beranda</a>
                <span aria-hidden="true">/</span>
                <span class="font-medium text-espresso-800">Menu</span>
            </nav>

            <p class="mt-8 text-[11px] font-semibold tracking-[0.24em] text-mocha-600 uppercase">Kategori produk</p>
            <div class="mt-3 flex flex-wrap items-end justify-between gap-6">
                <h1 class="max-w-2xl text-4xl font-semibold tracking-tight text-espresso-900 sm:text-5xl">
                    Pilih suasana minummu,
                    <span class="font-display font-normal italic text-mocha-600">kami siapkan.</span>
                </h1>
                <p class="max-w-sm text-sm leading-relaxed text-espresso-700/65">
                    Tiga kategori sederhana: kopi, non-kopi, dan camilan. Semua dibuat saat dipesan.
                </p>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-5 py-14 sm:px-8 lg:py-16">
        <div class="grid gap-4 md:grid-cols-3">
            @forelse ($categories as $category)
                <a
                    href="{{ route('categories.show', $category) }}"
                    class="group flex flex-col overflow-hidden rounded-3xl border border-espresso-800/8 bg-white/70 transition duration-300 hover:-translate-y-1 hover:border-mocha-600/20 hover:bg-white hover:shadow-xl hover:shadow-espresso-900/5"
                >
                    <div class="relative h-36 bg-linear-to-br {{ $categoryPalettes[$category->slug] ?? $categoryPalettes['kopi'] }}">
                        <div class="absolute inset-0 opacity-[0.14]" style="background-image: radial-gradient(circle at 1px 1px, #fdfaf4 1px, transparent 0); background-size: 18px 18px;"></div>

                        <span class="absolute top-4 right-4 rounded-full bg-espresso-900/30 px-3 py-1 text-[10px] font-semibold tracking-[0.14em] text-cream-50/90 uppercase backdrop-blur-sm">
                            {{ $category->products_count }} menu
                        </span>

                        <span class="absolute bottom-4 left-5 font-display text-3xl text-cream-50">{{ $category->name }}</span>

                        <span class="absolute right-5 bottom-5 grid size-8 place-items-center rounded-full bg-cream-50/15 text-cream-50 transition group-hover:bg-cream-50 group-hover:text-espresso-900" aria-hidden="true">
                            <svg viewBox="0 0 16 16" fill="none" class="size-3.5">
                                <path d="M3 8h10m0 0L9 4m4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </span>
                    </div>

                    <div class="flex flex-1 flex-col p-5">
                        <p class="text-sm leading-relaxed text-espresso-700/70">{{ $category->description }}</p>
                        <span class="mt-4 inline-flex items-center gap-2 text-sm font-semibold text-mocha-600">
                            Lihat kategori
                            <span class="transition group-hover:translate-x-0.5" aria-hidden="true">→</span>
                        </span>
                    </div>
                </a>
            @empty
                <p class="col-span-full rounded-3xl border border-dashed border-espresso-800/15 p-10 text-center text-sm text-espresso-700/60">
                    Kategori belum tersedia.
                </p>
            @endforelse
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-5 pb-20 sm:px-8 lg:pb-24">
        <div class="flex flex-wrap items-end justify-between gap-4 border-t border-espresso-800/10 pt-10">
            <div>
                <p class="text-[11px] font-semibold tracking-[0.24em] text-mocha-600 uppercase">Semua menu</p>
                <h2 class="mt-2 text-3xl font-semibold tracking-tight text-espresso-900">Dari yang ringan sampai yang kuat.</h2>
            </div>
            <p class="text-sm text-espresso-700/60">{{ $products->count() }} pilihan tersedia</p>
        </div>

        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($products as $product)
                <x-product-card :product="$product" />
            @empty
                <p class="col-span-full rounded-3xl border border-dashed border-espresso-800/15 p-10 text-center text-sm text-espresso-700/60">
                    Menu sedang kosong. Silakan cek lagi nanti.
                </p>
            @endforelse
        </div>
    </section>
@endsection
