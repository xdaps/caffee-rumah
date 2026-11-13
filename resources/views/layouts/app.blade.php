<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title', 'Caffee Rumah — Kopi Rumahan yang Hangat')</title>
        <meta
            name="description"
            content="@yield('description', 'Caffee Rumah menyajikan kopi rumahan dari biji arabika pilihan, diseduh manual dengan harga bersahabat. Mampir atau pesan antar lewat WhatsApp.')"
        >

        @fonts
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bg-cream-50 font-sans text-espresso-800 antialiased selection:bg-gold-500/30 selection:text-espresso-900">
        <a
            href="#konten"
            class="sr-only rounded-full bg-espresso-800 px-4 py-2 text-sm font-medium text-cream-50 focus:not-sr-only focus:fixed focus:top-4 focus:left-4 focus:z-50"
        >
            Langsung ke konten
        </a>

        <header class="sticky top-0 z-40 border-b border-espresso-800/5 bg-cream-50/80 backdrop-blur-md">
            <div class="mx-auto flex h-18 max-w-6xl items-center justify-between gap-6 px-5 sm:px-8">
                <a href="{{ route('home') }}" class="flex items-center gap-3" aria-label="Caffee Rumah — beranda">
                    <span class="grid size-10 place-items-center rounded-full bg-espresso-800 text-cream-100">
                        <svg viewBox="0 0 24 24" fill="none" class="size-5" aria-hidden="true">
                            <ellipse cx="12" cy="12" rx="8.2" ry="5.6" transform="rotate(-38 12 12)" stroke="currentColor" stroke-width="1.6" />
                            <path d="M8.4 15.6c2.4-2.1 3.4-4.7 2.1-7.1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                    </span>
                    <span class="leading-tight">
                        <span class="block text-[15px] font-semibold tracking-tight">Caffee Rumah</span>
                        <span class="block text-[11px] tracking-[0.18em] text-mocha-600 uppercase">Kopi rumahan</span>
                    </span>
                </a>

                @php
                    $navLink = 'transition-colors hover:text-espresso-900';
                    $navActive = 'font-semibold text-espresso-900';
                @endphp

                <nav class="hidden items-center gap-7 text-sm font-medium text-espresso-700/80 md:flex" aria-label="Navigasi utama">
                    <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? $navActive : $navLink }}">Beranda</a>
                    <a href="{{ route('categories.index') }}" class="{{ request()->routeIs('categories.*', 'products.*') ? $navActive : $navLink }}">Menu</a>
                    <a href="{{ route('home') }}#tentang" class="{{ $navLink }}">Tentang</a>
                    <a href="{{ route('home') }}#kontak" class="{{ $navLink }}">Kontak</a>
                </nav>

                <a
                    href="https://wa.me/6281234567890"
                    target="_blank"
                    rel="noopener"
                    class="inline-flex items-center gap-2 rounded-full bg-espresso-800 px-4 py-2.5 text-sm font-semibold text-cream-50 shadow-sm transition hover:bg-espresso-700 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-mocha-600"
                >
                    <svg viewBox="0 0 24 24" fill="currentColor" class="size-4" aria-hidden="true">
                        <path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm0 18.2c-1.6 0-3.1-.4-4.4-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.5-6.1c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1l-.7.9c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.1-.2 0-.4.1-.5l.5-.6c.1-.2.1-.3 0-.5l-.7-1.7c-.1-.3-.3-.3-.5-.3h-.5c-.2 0-.5.1-.7.3-.6.6-.9 1.4-.9 2.3 0 1.6 1.2 3.3 2.2 4.3 1.4 1.4 3.1 2.3 4.8 2.3.8 0 1.6-.3 2.1-.9.2-.2.3-.5.3-.7v-.5c0-.2 0-.3-.1-.4Z" />
                    </svg>
                    <span class="hidden sm:inline">Pesan sekarang</span>
                    <span class="sm:hidden">Pesan</span>
                </a>
            </div>
        </header>

        <main id="konten">
            @yield('content')
        </main>

        <footer class="border-t border-espresso-800/10 bg-cream-100/50">
            <div class="mx-auto flex max-w-6xl flex-col gap-6 px-5 py-10 sm:px-8 md:flex-row md:items-center md:justify-between">
                <div class="flex items-center gap-3">
                    <span class="grid size-9 place-items-center rounded-full bg-espresso-800 text-cream-100">
                        <svg viewBox="0 0 24 24" fill="none" class="size-4.5" aria-hidden="true">
                            <ellipse cx="12" cy="12" rx="8.2" ry="5.6" transform="rotate(-38 12 12)" stroke="currentColor" stroke-width="1.6" />
                            <path d="M8.4 15.6c2.4-2.1 3.4-4.7 2.1-7.1" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                        </svg>
                    </span>
                    <div class="leading-tight">
                        <p class="text-sm font-semibold text-espresso-900">Caffee Rumah</p>
                        <p class="text-xs text-espresso-700/60">Kopi rumahan, diseduh dengan hati.</p>
                    </div>
                </div>

                <div class="flex items-center gap-4 text-sm text-espresso-700/70">
                    <a href="{{ route('home') }}" class="transition hover:text-espresso-900">Beranda</a>
                    <a href="{{ route('categories.index') }}" class="transition hover:text-espresso-900">Menu</a>
                    <a href="{{ route('home') }}#tentang" class="transition hover:text-espresso-900">Tentang</a>
                </div>

                <p class="text-xs text-espresso-700/50">
                    &copy; {{ date('Y') }} Caffee Rumah. Dibuat dengan tenang.
                </p>
            </div>
        </footer>
    </body>
</html>
