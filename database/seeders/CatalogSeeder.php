<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CatalogSeeder extends Seeder
{
    /**
     * Seed the drink and snack menu.
     */
    public function run(): void
    {
        $catalog = [
            [
                'name' => 'Kopi',
                'slug' => 'kopi',
                'description' => 'Espresso-based classics, diseduh manual satu per satu.',
                'sort_order' => 1,
                'products' => [
                    [
                        'name' => 'Kopi Susu Gula Aren',
                        'slug' => 'kopi-susu-gula-aren',
                        'description' => 'Espresso, susu segar, dan gula aren cair yang lembut. Menu paling sering dipesan.',
                        'price' => 18000,
                        'badge' => 'Best seller',
                        'sort_order' => 1,
                    ],
                    [
                        'name' => 'Americano',
                        'slug' => 'americano',
                        'description' => 'Espresso murni dengan air dingin atau panas. Bersih, kuat, tanpa gula.',
                        'price' => 15000,
                        'badge' => null,
                        'sort_order' => 2,
                    ],
                    [
                        'name' => 'Cappuccino',
                        'slug' => 'cappuccino',
                        'description' => 'Espresso dengan susu steam dan foam tebal. Klasik yang menenangkan.',
                        'price' => 20000,
                        'badge' => null,
                        'sort_order' => 3,
                    ],
                    [
                        'name' => 'Es Kopi Rumah',
                        'slug' => 'es-kopi-rumah',
                        'description' => 'Racikan rahasia dapur kami: creamy, manis pas, dan bikin melek.',
                        'price' => 22000,
                        'badge' => 'Favorit',
                        'sort_order' => 4,
                    ],
                ],
            ],
            [
                'name' => 'Non-Kopi',
                'slug' => 'non-kopi',
                'description' => 'Untuk yang ingin tetap duduk lama tanpa kafein.',
                'sort_order' => 2,
                'products' => [
                    [
                        'name' => 'Matcha Latte',
                        'slug' => 'matcha-latte',
                        'description' => 'Matcha Jepang dengan susu segar. Tidak terlalu manis, cocok diminum pelan-pelan.',
                        'price' => 23000,
                        'badge' => null,
                        'sort_order' => 1,
                    ],
                ],
            ],
            [
                'name' => 'Camilan',
                'slug' => 'camilan',
                'description' => 'Teman ngobrol yang ringan, dibuat sendiri di dapur kami.',
                'sort_order' => 3,
                'products' => [
                    [
                        'name' => 'Roti Bakar Srikaya',
                        'slug' => 'roti-bakar-srikaya',
                        'description' => 'Roti gandum panggang dengan srikaya buatan sendiri dan mentega tipis.',
                        'price' => 16000,
                        'badge' => null,
                        'sort_order' => 1,
                    ],
                ],
            ],
        ];

        foreach ($catalog as $categoryData) {
            $products = $categoryData['products'];
            unset($categoryData['products']);

            $category = Category::query()->updateOrCreate(
                ['slug' => $categoryData['slug']],
                $categoryData,
            );

            foreach ($products as $productData) {
                $category->products()->updateOrCreate(
                    ['slug' => $productData['slug']],
                    $productData + ['is_available' => true],
                );
            }
        }
    }
}
