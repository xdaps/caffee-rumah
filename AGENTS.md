# AGENTS.md

Laravel 13 + Tailwind 4 app for a small home coffee shop ("Caffee Rumah"). Catalog data is
database-backed (`Category` has many `Product`) and rendered as a static-feeling site: landing page,
category index/detail, and product detail. There is no admin UI, auth, cart, or API.

## Commands

- `composer setup` — installs PHP/JS deps, creates `.env`, generates key, migrates + seeds, builds assets.
- `php artisan migrate --seed` — apply schema and re-run `CatalogSeeder` (idempotent `updateOrCreate`).
- `composer dev` (wraps `php artisan dev`) — runs `artisan serve`, `queue:listen`, and `npm run dev`
  concurrently; `php artisan dev:list` lists the three processes.
- `php artisan test` or `composer test` — PHPUnit suites in `tests/Unit` and `tests/Feature`.
- Single test: `php artisan test --filter=CatalogTest` or
  `vendor/bin/phpunit tests/Feature/CatalogTest.php`.
- `vendor/bin/pint` — code style (Laravel preset, no `pint.json`). No lint/typecheck script exists.
- `npm run dev` / `npm run build` — Vite. Rebuild or keep `npm run dev` running after editing Blade
  classes, otherwise Tailwind output is stale.

## Architecture

- Routes in `routes/web.php`: `/` (home), `/kategori` (all categories + products),
  `/kategori/{category:slug}`, `/produk/{product:slug}`. Model binding uses **slug**, not id.
- `CategoryController` and `ProductController` are thin read-only controllers; unavailable products
  return 404. Home route closure loads the first 6 available products for the menu section.
- Views extend `resources/views/layouts/app.blade.php` (header/nav/footer, `@fonts`, `@vite`).
  Reusable catalog UI lives in `resources/views/components/product-card.blade.php` and
  `product-art.blade.php` (SVG art; no image files or uploads exist).
- Menu content comes from `database/seeders/CatalogSeeder.php`, not hardcoded Blade arrays. Edit the
  seeder and re-run it to change menu items; product prices are integer rupiah and formatted via
  `Product::formattedPrice()`.
- Tailwind 4 theme tokens are defined in `resources/css/app.css` under `@theme` (`cream-*`,
  `espresso-*`, `mocha-*`, `latte-*`, `gold-*`, `font-display`). Use them instead of raw hex values.
  Fonts are configured in `vite.config.js` and injected with `@fonts`.
- Contact details are placeholders (`wa.me/6281234567890`, Jl. Melati No. 12) repeated in the layout,
  home, and product pages.

## Testing and environment

- PHP 8.3, Laravel 13.42, PHPUnit 12 (no Pest), Vite 8 + Tailwind 4 via `@tailwindcss/vite`.
- Tests use in-memory SQLite (`phpunit.xml`). Any test that renders a page must use
  `RefreshDatabase` (the home route queries `products`) and `$this->withoutVite()` so assets need
  not be built.
- Dev DB is SQLite at `database/database.sqlite`; sessions, cache, and queue use the `database`
  driver, so schema work can affect those tables.
- `laravel/pao` (dev-only) rewrites `php artisan test` output into a compact JSON summary — expected.
- Laravel Boost is **not** installed; installing it is optional and would regenerate this file.

## Repo notes

- No git repository is initialized here, only `.gitignore`/`.gitattributes`; git-based workflows fail.
- `README.md` and `CLAUDE.md` are stock Laravel/Boost boilerplate — treat this file as the source of truth.
