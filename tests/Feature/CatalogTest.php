<?php

namespace Tests\Feature;

use Database\Seeders\CatalogSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CatalogTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();

        $this->withoutVite();
    }

    public function test_category_index_lists_all_categories_and_products(): void
    {
        $this->seed(CatalogSeeder::class);

        $this->get('/kategori')
            ->assertOk()
            ->assertSee('Kopi')
            ->assertSee('Non-Kopi')
            ->assertSee('Camilan')
            ->assertSee('Kopi Susu Gula Aren');
    }

    public function test_category_page_only_lists_products_from_that_category(): void
    {
        $this->seed(CatalogSeeder::class);

        $this->get('/kategori/kopi')
            ->assertOk()
            ->assertSee('Kopi Susu Gula Aren')
            ->assertSee('Cappuccino')
            ->assertDontSee('Matcha Latte');
    }

    public function test_product_detail_page_shows_the_product(): void
    {
        $this->seed(CatalogSeeder::class);

        $this->get('/produk/kopi-susu-gula-aren')
            ->assertOk()
            ->assertSee('Kopi Susu Gula Aren')
            ->assertSee('Rp 18.000')
            ->assertSee('Best seller');
    }

    public function test_unknown_category_and_product_return_not_found(): void
    {
        $this->get('/kategori/tidak-ada')->assertNotFound();
        $this->get('/produk/tidak-ada')->assertNotFound();
    }

    public function test_homepage_lists_products_from_the_seeder(): void
    {
        $this->seed(CatalogSeeder::class);

        $this->get('/')
            ->assertOk()
            ->assertSee('Kopi Susu Gula Aren')
            ->assertSee('Menu favorit');
    }
}
