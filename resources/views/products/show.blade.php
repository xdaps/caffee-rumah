@extends('layouts.app')

@section('title', $product->name.' — Caffee Rumah')
@section('description', $product->description)

@section('content')
    @php
        $orderMessage = rawurlencode("Halo Caffee Rumah, saya mau pesan {$product->name} ({$product->formattedPrice()}).");
    @endphp

    <section class="mx-auto max-w-6xl px-5 py-10 sm:px-8 lg:py-14">
        <nav class="flex flex-wrap items-center gap-2 text-xs text-espresso-700/60" aria-label="Breadcrumb">
            <a href="{{ route('home') }}" class="transition hover:text-espresso-900">Beranda</a>
            <span aria-hidden="true">/</span>
            <a href="{{ route('categories.index') }}" class="transition hover:text-espresso-900">Menu</a>
            <span aria-hidden="true">/</span>
            <a href="{{ route('categories.show', $product->category) }}" class="transition hover:text-espresso-900">{{ $product->category->name }}</a>
            <span aria-hidden="true">/</span>
            <span class="font-medium text-espresso-800">{{ $product->name }}</span>
        </nav>

        <div class="mt-8 grid gap-10 lg:grid-cols-2 lg:gap-14">
            <div class="relative">
                <x-product-art :product="$product" :label="false" class="aspect-square rounded-[2rem] shadow-xl shadow-espresso-900/10" />

                <div class="absolute right-5 bottom-5 rounded-2xl bg-cream-50/95 px-4 py-3 shadow-lg ring-1 ring-espresso-800/5 backdrop-blur-sm">
                    <p class="text-[10px] font-semibold tracking-[0.16em] text-mocha-600 uppercase">Diseduh</p>
                    <p class="mt-0.5 text-sm font-semibold text-espresso-900">Saat dipesan</p>
                </div>
            </div>

            <div class="lg:py-4">
                <div class="flex flex-wrap items-center gap-2">
                    <a
                        href="{{ route('categories.show', $product->category) }}"
                        class="rounded-full border border-mocha-600/20 bg-cream-100/70 px-3.5 py-1.5 text-[11px] font-semibold tracking-[0.14em] text-mocha-600 uppercase transition hover:border-mocha-600/40"
                    >
                        {{ $product->category->name }}
                    </a>
                    @if ($product->badge)
                        <span class="rounded-full bg-gold-500/15 px-3.5 py-1.5 text-[11px] font-semibold tracking-[0.14em] text-gold-500 uppercase">
                            {{ $product->badge }}
                        </span>
                    @endif
                </div>

                <h1 class="mt-5 text-4xl font-semibold tracking-tight text-espresso-900 sm:text-5xl">{{ $product->name }}</h1>

                <p class="mt-5 text-2xl font-semibold text-espresso-900">
                    {{ $product->formattedPrice() }}
                    <span class="text-sm font-normal text-espresso-700/50">/ porsi</span>
                </p>

                <p class="mt-5 max-w-xl text-[15px] leading-relaxed text-espresso-700/75">{{ $product->description }}</p>

                <div class="mt-8 flex flex-wrap gap-3">
                    <a
                        href="https://wa.me/6281234567890?text={{ $orderMessage }}"
                        target="_blank"
                        rel="noopener"
                        class="inline-flex items-center gap-2 rounded-full bg-espresso-800 px-6 py-3.5 text-sm font-semibold text-cream-50 shadow-lg shadow-espresso-800/15 transition hover:-translate-y-0.5 hover:bg-espresso-700"
                    >
                        <svg viewBox="0 0 24 24" fill="currentColor" class="size-4" aria-hidden="true">
                            <path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm0 18.2c-1.6 0-3.1-.4-4.4-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.5-6.1c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1l-.7.9c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.1-.2 0-.4.1-.5l.5-.6c.1-.2.1-.3 0-.5l-.7-1.7c-.1-.3-.3-.3-.5-.3h-.5c-.2 0-.5.1-.7.3-.6.6-.9 1.4-.9 2.3 0 1.6 1.2 3.3 2.2 4.3 1.4 1.4 3.1 2.3 4.8 2.3.8 0 1.6-.3 2.1-.9.2-.2.3-.5.3-.7v-.5c0-.2 0-.3-.1-.4Z" />
                        </svg>
                        Pesan lewat WhatsApp
                    </a>
                    <a
                        href="{{ route('categories.show', $product->category) }}"
                        class="inline-flex items-center gap-2 rounded-full border border-espresso-800/15 px-6 py-3.5 text-sm font-semibold text-espresso-800 transition hover:border-espresso-800/30 hover:bg-white/60"
                    >
                        Lihat {{ strtolower($product->category->name) }} lain
                    </a>
                </div>

                <dl class="mt-10 grid gap-3 sm:grid-cols-2">
                    <div class="rounded-2xl border border-espresso-800/8 bg-white/60 p-4">
                        <dt class="flex items-center gap-2 text-sm font-semibold text-espresso-900">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-4 text-mocha-600" aria-hidden="true">
                                <path d="M4 14h13a4 4 0 0 0 0-8H4v8Zm0 0v5m3-1h8" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            Panas atau dingin
                        </dt>
                        <dd class="mt-1 text-sm text-espresso-700/65">Beri tahu barista saat memesan.</dd>
                    </div>
                    <div class="rounded-2xl border border-espresso-800/8 bg-white/60 p-4">
                        <dt class="flex items-center gap-2 text-sm font-semibold text-espresso-900">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-4 text-mocha-600" aria-hidden="true">
                                <path d="M12 3c3 4 5 7 5 10a5 5 0 0 1-10 0c0-3 2-6 5-10Z" stroke-linejoin="round" />
                            </svg>
                            Gula bisa dipisah
                        </dt>
                        <dd class="mt-1 text-sm text-espresso-700/65">Manisnya bisa disesuaikan.</dd>
                    </div>
                    <div class="rounded-2xl border border-espresso-800/8 bg-white/60 p-4">
                        <dt class="flex items-center gap-2 text-sm font-semibold text-espresso-900">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-4 text-mocha-600" aria-hidden="true">
                                <path d="M12 21c0-6 3-10 8-11-1 6-4 9-8 11Z" stroke-linejoin="round" />
                                <path d="M12 21C8 19 5 16 4 10c5 1 8 5 8 11Z" stroke-linejoin="round" />
                            </svg>
                            Biji arabika lokal
                        </dt>
                        <dd class="mt-1 text-sm text-espresso-700/65">Disangrai dalam batch kecil.</dd>
                    </div>
                    <div class="rounded-2xl border border-espresso-800/8 bg-white/60 p-4">
                        <dt class="flex items-center gap-2 text-sm font-semibold text-espresso-900">
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-4 text-mocha-600" aria-hidden="true">
                                <path d="M4 8h16v10a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V8Zm4 0V6a4 4 0 0 1 8 0v2" stroke-linejoin="round" />
                            </svg>
                            Bisa dibungkus
                        </dt>
                        <dd class="mt-1 text-sm text-espresso-700/65">Cocok untuk dibawa pulang.</dd>
                    </div>
                </dl>
            </div>
        </div>
    </section>

    @if ($relatedProducts->isNotEmpty())
        <section class="mx-auto max-w-6xl px-5 pb-20 sm:px-8 lg:pb-24">
            <div class="border-t border-espresso-800/10 pt-10">
                <div class="flex flex-wrap items-end justify-between gap-4">
                    <div>
                        <p class="text-[11px] font-semibold tracking-[0.24em] text-mocha-600 uppercase">Masih dari {{ $product->category->name }}</p>
                        <h2 class="mt-2 text-3xl font-semibold tracking-tight text-espresso-900">Mungkin kamu juga suka.</h2>
                    </div>
                    <a href="{{ route('categories.show', $product->category) }}" class="inline-flex items-center gap-2 text-sm font-semibold text-mocha-600 transition hover:text-espresso-900">
                        Lihat semua
                        <span aria-hidden="true">→</span>
                    </a>
                </div>

                <div class="mt-8 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @foreach ($relatedProducts as $relatedProduct)
                        <x-product-card :product="$relatedProduct" />
                    @endforeach
                </div>
            </div>
        </section>
    @endif
@endsection
