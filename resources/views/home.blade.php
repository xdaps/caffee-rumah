@extends('layouts.app')

@section('title', 'Caffee Rumah — Kopi Rumahan yang Hangat')
@section('description', 'Caffee Rumah menyajikan kopi rumahan dari biji arabika pilihan, diseduh manual dengan harga bersahabat. Mampir atau pesan antar lewat WhatsApp.')

@section('content')
            {{-- Hero --}}
            <section id="beranda" class="relative overflow-hidden">
                <div class="pointer-events-none absolute inset-0 -z-10">
                    <div class="absolute -top-32 -left-24 size-96 rounded-full bg-latte-300/40 blur-3xl"></div>
                    <div class="absolute top-24 -right-32 size-[26rem] rounded-full bg-gold-500/15 blur-3xl"></div>
                </div>

                <div class="mx-auto grid max-w-6xl items-center gap-14 px-5 pt-14 pb-16 sm:px-8 lg:grid-cols-[1.05fr_0.95fr] lg:gap-10 lg:pt-20 lg:pb-24">
                    <div>
                        <p class="inline-flex items-center gap-2 rounded-full border border-mocha-600/15 bg-white/70 px-3.5 py-1.5 text-xs font-semibold tracking-wide text-mocha-600">
                            <span class="size-1.5 rounded-full bg-gold-500"></span>
                            Disangrai mingguan, diseduh harian
                        </p>

                        <h1 class="mt-6 text-5xl leading-[1.03] font-semibold tracking-tight text-espresso-900 sm:text-6xl lg:text-[4.2rem]">
                            Secangkir hangat,
                            <span class="block font-display text-[1.08em] font-normal italic text-mocha-600">rasa rumahan.</span>
                        </h1>

                        <p class="mt-6 max-w-xl text-base leading-relaxed text-espresso-700/75 sm:text-lg">
                            Kopi dari biji arabika pilihan, diseduh manual satu per satu. Tanpa mesin besar,
                            tanpa terburu-buru — hanya rasa jujur yang bikin ingin kembali.
                        </p>

                        <div class="mt-8 flex flex-wrap items-center gap-3">
                            <a
                                href="#menu"
                                class="inline-flex items-center gap-2 rounded-full bg-espresso-800 px-6 py-3.5 text-sm font-semibold text-cream-50 shadow-lg shadow-espresso-800/15 transition hover:-translate-y-0.5 hover:bg-espresso-700"
                            >
                                Lihat menu
                                <svg viewBox="0 0 16 16" fill="none" class="size-4" aria-hidden="true">
                                    <path d="M3 8h10m0 0L9 4m4 4-4 4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a
                                href="#tentang"
                                class="inline-flex items-center gap-2 rounded-full border border-espresso-800/15 px-6 py-3.5 text-sm font-semibold text-espresso-800 transition hover:border-espresso-800/30 hover:bg-white/60"
                            >
                                Cerita kami
                            </a>
                        </div>

                        <dl class="mt-10 grid max-w-lg grid-cols-3 gap-4 border-t border-espresso-800/10 pt-6">
                            <div>
                                <dt class="text-[11px] font-semibold tracking-[0.14em] text-mocha-600 uppercase">Biji</dt>
                                <dd class="mt-1 text-sm font-medium">100% arabika</dd>
                            </div>
                            <div>
                                <dt class="text-[11px] font-semibold tracking-[0.14em] text-mocha-600 uppercase">Harga</dt>
                                <dd class="mt-1 text-sm font-medium">Mulai Rp 15.000</dd>
                            </div>
                            <div>
                                <dt class="text-[11px] font-semibold tracking-[0.14em] text-mocha-600 uppercase">Buka</dt>
                                <dd class="mt-1 text-sm font-medium">08.00 – 21.00</dd>
                            </div>
                        </dl>
                    </div>

                    {{-- Hero illustration --}}
                    <div class="relative mx-auto w-full max-w-md lg:max-w-none">
                        <div class="absolute -inset-4 -z-10 rounded-[2.5rem] bg-latte-400/25 blur-2xl"></div>

                        <div class="relative aspect-4/5 overflow-hidden rounded-[2rem] bg-linear-to-br from-mocha-500 via-espresso-700 to-espresso-900 shadow-2xl shadow-espresso-900/25">
                            <div class="absolute inset-0 opacity-[0.12]" style="background-image: radial-gradient(circle at 1px 1px, #fdfaf4 1px, transparent 0); background-size: 22px 22px;"></div>
                            <div class="absolute -top-24 -left-16 size-72 rounded-full bg-gold-500/25 blur-3xl"></div>

                            <div class="relative flex h-full flex-col items-center justify-center px-8">
                                <svg viewBox="0 0 320 320" fill="none" class="w-full max-w-[19rem] drop-shadow-2xl" aria-hidden="true">
                                    <path d="M120 86c-12-14 8-23-4-38" stroke="#f8f1e4" stroke-opacity=".55" stroke-width="5" stroke-linecap="round" />
                                    <path d="M160 74c-12-14 8-23-4-38" stroke="#f8f1e4" stroke-opacity=".4" stroke-width="5" stroke-linecap="round" />
                                    <path d="M200 86c-12-14 8-23-4-38" stroke="#f8f1e4" stroke-opacity=".55" stroke-width="5" stroke-linecap="round" />

                                    <ellipse cx="160" cy="258" rx="116" ry="16" fill="#1f1410" fill-opacity=".45" />
                                    <ellipse cx="160" cy="252" rx="104" ry="14" fill="#f8f1e4" fill-opacity=".14" />

                                    <path d="M84 132h152l-13 84a24 24 0 0 1-24 21h-78a24 24 0 0 1-24-21l-13-84Z" fill="#f8f1e4" />
                                    <path d="M96 132h128l-3 20H99l-3-20Z" fill="#efe2cc" />
                                    <ellipse cx="160" cy="132" rx="76" ry="13" fill="#8a6246" />
                                    <ellipse cx="160" cy="130" rx="66" ry="10" fill="#b98a5f" />
                                    <path d="M116 130c16-7 34-8 48-3 16 6 28 3 38-4" stroke="#efe2cc" stroke-opacity=".8" stroke-width="3" stroke-linecap="round" />

                                    <path d="M236 152c28-2 40 12 33 31-6 17-24 24-44 18" stroke="#f8f1e4" stroke-width="15" stroke-linecap="round" />
                                    <path d="M236 152c28-2 40 12 33 31-6 17-24 24-44 18" stroke="#dcc0a3" stroke-opacity=".35" stroke-width="5" stroke-linecap="round" />
                                </svg>

                                <div class="mt-2 text-center">
                                    <p class="font-display text-2xl italic text-cream-100">Kopi susu gula aren</p>
                                    <p class="mt-1 text-[11px] tracking-[0.24em] text-latte-300/80 uppercase">Best seller</p>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -bottom-6 -left-4 rounded-2xl bg-cream-50 p-4 shadow-xl ring-1 ring-espresso-800/5 sm:-left-6">
                            <div class="flex items-center gap-3">
                                <span class="grid size-10 place-items-center rounded-full bg-gold-500/15 text-gold-500">
                                    <svg viewBox="0 0 24 24" fill="currentColor" class="size-5" aria-hidden="true">
                                        <path d="M12 3.5l2.6 5.3 5.9.9-4.3 4.1 1 5.8-5.2-2.7-5.2 2.7 1-5.8L3.5 9.7l5.9-.9L12 3.5Z" />
                                    </svg>
                                </span>
                                <div class="leading-tight">
                                    <p class="text-sm font-semibold">4,9 / 5</p>
                                    <p class="text-xs text-espresso-700/60">Kata pelanggan setia</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Strip --}}
            <div class="border-y border-espresso-800/10 bg-cream-100/60">
                <div class="mx-auto flex max-w-6xl flex-wrap items-center justify-center gap-x-10 gap-y-3 px-5 py-5 text-[11px] font-semibold tracking-[0.22em] text-mocha-600 uppercase sm:px-8">
                    <span>Biji lokal</span>
                    <span class="hidden size-1 rounded-full bg-latte-400 sm:block"></span>
                    <span>Roast mingguan</span>
                    <span class="hidden size-1 rounded-full bg-latte-400 sm:block"></span>
                    <span>Manual brew</span>
                    <span class="hidden size-1 rounded-full bg-latte-400 sm:block"></span>
                    <span>Tanpa pengawet</span>
                </div>
            </div>

            {{-- Menu --}}
            <section id="menu" class="mx-auto max-w-6xl scroll-mt-24 px-5 py-20 sm:px-8 lg:py-28">
                <div class="flex flex-wrap items-end justify-between gap-6">
                    <div class="max-w-xl">
                        <p class="text-[11px] font-semibold tracking-[0.24em] text-mocha-600 uppercase">Menu favorit</p>
                        <h2 class="mt-3 text-4xl font-semibold tracking-tight text-espresso-900 sm:text-5xl">
                            Sederhana, tapi <span class="font-display font-normal italic text-mocha-600">bikin balik lagi.</span>
                        </h2>
                    </div>
                    <div class="max-w-sm">
                        <p class="text-sm leading-relaxed text-espresso-700/65">
                            Semua kopi dibuat saat dipesan. Bisa panas atau dingin, gula bisa dipisah —
                            tinggal bilang saja.
                        </p>
                        <a href="{{ route('categories.index') }}" class="mt-3 inline-flex items-center gap-2 text-sm font-semibold text-mocha-600 transition hover:text-espresso-900">
                            Lihat semua menu
                            <span aria-hidden="true">→</span>
                        </a>
                    </div>
                </div>

                <div class="mt-12 grid gap-4 sm:grid-cols-2 lg:grid-cols-3">
                    @forelse ($products as $product)
                        <x-product-card :product="$product" />
                    @empty
                        <p class="col-span-full rounded-3xl border border-dashed border-espresso-800/15 p-10 text-center text-sm text-espresso-700/60">
                            Menu akan segera hadir.
                        </p>
                    @endforelse
                </div>

                <p class="mt-8 text-center text-sm text-espresso-700/55">
                    Harga sudah termasuk pajak. Ada menu musiman setiap bulan — tanyakan ke barista kami.
                </p>
            </section>

            {{-- Tentang --}}
            <section id="tentang" class="scroll-mt-24 px-5 pb-20 sm:px-8 lg:pb-28">
                <div class="mx-auto max-w-6xl overflow-hidden rounded-[2.5rem] bg-espresso-800 text-cream-100">
                    <div class="grid gap-12 p-8 sm:p-12 lg:grid-cols-[1.1fr_0.9fr] lg:gap-16 lg:p-16">
                        <div>
                            <p class="text-[11px] font-semibold tracking-[0.24em] text-latte-300/80 uppercase">Tentang kami</p>
                            <h2 class="mt-4 text-4xl font-semibold tracking-tight text-cream-50 sm:text-5xl">
                                Dari dapur rumah,
                                <span class="block font-display text-[1.08em] font-normal italic text-latte-300">untuk tetangga.</span>
                            </h2>

                            <p class="mt-6 max-w-xl text-[15px] leading-relaxed text-cream-200/75">
                                Caffee Rumah bermula dari satu mesin manual di dapur dan kebiasaan menyeduh kopi
                                untuk keluarga. Sekarang kami membuka pintu untuk siapa saja yang ingin
                                berhenti sebentar, ngobrol, dan menikmati kopi yang dibuat dengan tenang.
                            </p>
                            <p class="mt-4 max-w-xl text-[15px] leading-relaxed text-cream-200/75">
                                Kami bekerja sama dengan petani lokal, menyangrai dalam batch kecil, dan
                                menyeduh sesuai pesanan. Tidak ada yang instan — dan memang itu intinya.
                            </p>

                            <blockquote class="mt-8 border-l-2 border-gold-500/60 pl-5">
                                <p class="font-display text-xl italic text-cream-100">
                                    “Kopi yang enak itu sederhana: biji yang baik, air yang tepat, dan waktu yang cukup.”
                                </p>
                                <footer class="mt-2 text-xs tracking-[0.16em] text-latte-300/70 uppercase">Pemilik Caffee Rumah</footer>
                            </blockquote>
                        </div>

                        <div class="flex flex-col justify-center gap-4">
                            <div class="rounded-2xl border border-cream-100/10 bg-cream-100/5 p-5">
                                <div class="flex items-start gap-4">
                                    <span class="grid size-10 shrink-0 place-items-center rounded-full bg-gold-500/15 text-gold-500">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-5" aria-hidden="true">
                                            <path d="M12 21c0-6 3-10 8-11-1 6-4 9-8 11Z" stroke-linejoin="round" />
                                            <path d="M12 21C8 19 5 16 4 10c5 1 8 5 8 11Z" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div>
                                        <h3 class="font-semibold text-cream-50">Biji dari petani lokal</h3>
                                        <p class="mt-1 text-sm leading-relaxed text-cream-200/65">Arabika dataran tinggi, dibeli langsung dengan harga yang adil.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-cream-100/10 bg-cream-100/5 p-5">
                                <div class="flex items-start gap-4">
                                    <span class="grid size-10 shrink-0 place-items-center rounded-full bg-gold-500/15 text-gold-500">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-5" aria-hidden="true">
                                            <path d="M12 3c3 4 5 7 5 10a5 5 0 0 1-10 0c0-3 2-6 5-10Z" stroke-linejoin="round" />
                                            <path d="M12 17c-1.5-1.5-1.8-3.2-1-5" stroke-linecap="round" />
                                        </svg>
                                    </span>
                                    <div>
                                        <h3 class="font-semibold text-cream-50">Roast dalam batch kecil</h3>
                                        <p class="mt-1 text-sm leading-relaxed text-cream-200/65">Disangrai mingguan agar rasa tetap segar, tidak disimpan berbulan-bulan.</p>
                                    </div>
                                </div>
                            </div>

                            <div class="rounded-2xl border border-cream-100/10 bg-cream-100/5 p-5">
                                <div class="flex items-start gap-4">
                                    <span class="grid size-10 shrink-0 place-items-center rounded-full bg-gold-500/15 text-gold-500">
                                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-5" aria-hidden="true">
                                            <path d="M12 20s-7-4.3-7-9a4 4 0 0 1 7-2 4 4 0 0 1 7 2c0 4.7-7 9-7 9Z" stroke-linejoin="round" />
                                        </svg>
                                    </span>
                                    <div>
                                        <h3 class="font-semibold text-cream-50">Diseduh satu per satu</h3>
                                        <p class="mt-1 text-sm leading-relaxed text-cream-200/65">Tanpa antrean mesin otomatis. Setiap cangkir dapat perhatian penuh.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            {{-- Kontak --}}
            <section id="kontak" class="mx-auto max-w-6xl scroll-mt-24 px-5 pb-20 sm:px-8 lg:pb-28">
                <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-center">
                    <div>
                        <p class="text-[11px] font-semibold tracking-[0.24em] text-mocha-600 uppercase">Mampir yuk</p>
                        <h2 class="mt-3 text-4xl font-semibold tracking-tight text-espresso-900 sm:text-5xl">
                            Kursi kosong,
                            <span class="font-display font-normal italic text-mocha-600">kopi siap.</span>
                        </h2>
                        <p class="mt-5 max-w-md text-sm leading-relaxed text-espresso-700/70">
                            Datang langsung untuk suasana dapur kami, atau pesan antar lewat WhatsApp.
                            Kami buka setiap hari, termasuk akhir pekan.
                        </p>

                        <div class="mt-8 flex flex-wrap gap-3">
                            <a
                                href="https://wa.me/6281234567890"
                                target="_blank"
                                rel="noopener"
                                class="inline-flex items-center gap-2 rounded-full bg-espresso-800 px-6 py-3.5 text-sm font-semibold text-cream-50 shadow-lg shadow-espresso-800/15 transition hover:-translate-y-0.5 hover:bg-espresso-700"
                            >
                                <svg viewBox="0 0 24 24" fill="currentColor" class="size-4" aria-hidden="true">
                                    <path d="M12 2a10 10 0 0 0-8.6 15.1L2 22l5-1.3A10 10 0 1 0 12 2Zm0 18.2c-1.6 0-3.1-.4-4.4-1.2l-.3-.2-3 .8.8-2.9-.2-.3A8.2 8.2 0 1 1 12 20.2Zm4.5-6.1c-.2-.1-1.4-.7-1.6-.8-.2-.1-.4-.1-.5.1l-.7.9c-.1.2-.3.2-.5.1a6.7 6.7 0 0 1-3.3-2.9c-.1-.2 0-.4.1-.5l.5-.6c.1-.2.1-.3 0-.5l-.7-1.7c-.1-.3-.3-.3-.5-.3h-.5c-.2 0-.5.1-.7.3-.6.6-.9 1.4-.9 2.3 0 1.6 1.2 3.3 2.2 4.3 1.4 1.4 3.1 2.3 4.8 2.3.8 0 1.6-.3 2.1-.9.2-.2.3-.5.3-.7v-.5c0-.2 0-.3-.1-.4Z" />
                                </svg>
                                Chat WhatsApp
                            </a>
                            <a
                                href="https://maps.google.com/?q=Jl.+Melati+No.+12"
                                target="_blank"
                                rel="noopener"
                                class="inline-flex items-center gap-2 rounded-full border border-espresso-800/15 px-6 py-3.5 text-sm font-semibold text-espresso-800 transition hover:border-espresso-800/30 hover:bg-white/60"
                            >
                                Buka peta
                            </a>
                        </div>
                    </div>

                    <div class="grid gap-4 sm:grid-cols-2">
                        <div class="rounded-3xl border border-espresso-800/8 bg-white/70 p-6">
                            <span class="grid size-10 place-items-center rounded-full bg-cream-100 text-mocha-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-5" aria-hidden="true">
                                    <circle cx="12" cy="12" r="8.5" />
                                    <path d="M12 7.5V12l3 2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </span>
                            <h3 class="mt-4 text-sm font-semibold tracking-wide text-espresso-900">Jam buka</h3>
                            <dl class="mt-3 space-y-1.5 text-sm text-espresso-700/70">
                                <div class="flex justify-between gap-4">
                                    <dt>Senin – Jumat</dt>
                                    <dd class="font-medium text-espresso-800">08.00 – 21.00</dd>
                                </div>
                                <div class="flex justify-between gap-4">
                                    <dt>Sabtu – Minggu</dt>
                                    <dd class="font-medium text-espresso-800">09.00 – 22.00</dd>
                                </div>
                            </dl>
                        </div>

                        <div class="rounded-3xl border border-espresso-800/8 bg-white/70 p-6">
                            <span class="grid size-10 place-items-center rounded-full bg-cream-100 text-mocha-600">
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" class="size-5" aria-hidden="true">
                                    <path d="M12 21s-6.5-5.4-6.5-10a6.5 6.5 0 0 1 13 0c0 4.6-6.5 10-6.5 10Z" stroke-linejoin="round" />
                                    <circle cx="12" cy="11" r="2.4" />
                                </svg>
                            </span>
                            <h3 class="mt-4 text-sm font-semibold tracking-wide text-espresso-900">Lokasi</h3>
                            <p class="mt-3 text-sm leading-relaxed text-espresso-700/70">
                                Jl. Melati No. 12<br>
                                Bandung, Jawa Barat
                            </p>
                        </div>

                        <div class="rounded-3xl border border-espresso-800/8 bg-white/70 p-6 sm:col-span-2">
                            <div class="flex flex-wrap items-center justify-between gap-4">
                                <div>
                                    <h3 class="text-sm font-semibold tracking-wide text-espresso-900">Pesan antar</h3>
                                    <p class="mt-1.5 text-sm text-espresso-700/70">Radius 5 km, gratis untuk pesanan di atas Rp 100.000.</p>
                                </div>
                                <a href="tel:+6281234567890" class="text-sm font-semibold text-mocha-600 underline decoration-mocha-600/30 underline-offset-4 transition hover:text-espresso-800">
                                    0812-3456-7890
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
@endsection
