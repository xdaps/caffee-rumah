@extends('layouts.app')

@section('title', $category->name.' — Menu Caffee Rumah')
@section('description', $category->description ?? 'Menu '.$category->name.' di Caffee Rumah.')

@section('content')
    @php
        $palette = [
            'kopi' => 'from-mocha-500 via-espresso-700 to-espresso-900',
            'non-kopi' => 'from-[#7a8f6a] via-[#4f6650] to-[#2d3d2f]',
            'camilan' => 'from-gold-500 via-[#b0743c] to-[#5b3418]',
        ][$category->slug] ?? 'from-mocha-500 via-espresso-700 to-espresso-900';
    @endphp

    <section class="relative overflow-hidden border-b border-espresso-800/10">
        <div class="absolute inset-0 -z-10 bg-linear-to-br {{ $palette }}"></div>
        <div class="absolute inset-0 -z-10 opacity-[0.14]" style="background-image: radial-gradient(circle at 1px 1px, #fdfaf4 1px, transparent 0); background-size: 22px 22px;"></div>
        <div class="absolute -top-24 -left-16 -z-10 size-80 rounded-full bg-gold-500/20 blur-3xl"></div>

        <div class="mx-auto max-w-6xl px-5 py-14 sm:px-8 lg:py-20">
            <nav class="flex flex-wrap items-center gap-2 text-xs text-cream-200/70" aria-label="Breadcrumb">
                <a href="{{ route('home') }}" class="transition hover:text-cream-50">Beranda</a>
                <span aria-hidden="true">/</span>
                <a href="{{ route('categories.index') }}" class="transition hover:text-cream-50">Menu</a>
                <span aria-hidden="true">/</span>
                <span class="font-medium text-cream-50">{{ $category->name }}</span>
            </nav>

            <div class="mt-10 flex flex-wrap items-end justify-between gap-6">
                <div class="max-w-2xl">
                    <p class="text-[11px] font-semibold tracking-[0.24em] text-latte-300/80 uppercase">Kategori produk</p>
                    <h1 class="mt-3 font-display text-5xl text-cream-50 sm:text-6xl">{{ $category->name }}</h1>
                    @if ($category->description)
                        <p class="mt-4 max-w-xl text-sm leading-relaxed text-cream-200/75 sm:text-base">{{ $category->description }}</p>
                    @endif
                </div>

                <span class="rounded-full border border-cream-50/20 bg-cream-50/10 px-4 py-2 text-xs font-semibold tracking-[0.14em] text-cream-50 uppercase backdrop-blur-sm">
                    {{ $products->count() }} menu
                </span>
            </div>
        </div>
    </section>

    <section class="mx-auto max-w-6xl px-5 py-14 sm:px-8 lg:py-16">
        <div class="flex flex-wrap items-end justify-between gap-4">
            <h2 class="text-2xl font-semibold tracking-tight text-espresso-900">Semua {{ strtolower($category->name) }}</h2>
            <a href="{{ route('categories.index') }}" class="inline-flex items-center gap-2 text-sm font-semibold text-mocha-600 transition hover:text-espresso-900">
                <span aria-hidden="true">←</span>
                Kembali ke semua kategori
            </a>
        </div>

        <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
            @forelse ($products as $product)
                <x-product-card :product="$product" />
            @empty
                <p class="col-span-full rounded-3xl border border-dashed border-espresso-800/15 p-10 text-center text-sm text-espresso-700/60">
                    Belum ada menu di kategori ini.
                </p>
            @endforelse
        </div>

        @if ($otherCategories->isNotEmpty())
            <div class="mt-14 border-t border-espresso-800/10 pt-8">
                <p class="text-[11px] font-semibold tracking-[0.24em] text-mocha-600 uppercase">Kategori lain</p>
                <div class="mt-4 flex flex-wrap gap-2">
                    @foreach ($otherCategories as $otherCategory)
                        <a
                            href="{{ route('categories.show', $otherCategory) }}"
                            class="rounded-full border border-espresso-800/15 px-4 py-2 text-sm font-medium text-espresso-800 transition hover:border-mocha-600/40 hover:bg-white/70"
                        >
                            {{ $otherCategory->name }}
                        </a>
                    @endforeach
                </div>
            </div>
        @endif
    </section>
@endsection
