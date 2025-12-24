<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('products')->insert([
            [
                'name' => 'apple',
                'description' => 'Fresh, crisp apple with a naturally sweet taste, perfect for healthy snacking.',
                'price' => 1.00,
                'stock' => 100,
                'image_url' => 'frontend/assets/images/1766545624_Red_Apple.jpg',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Orange',
                'description' => 'Juicy, refreshing orange with a bright citrus flavor, rich in natural vitamin C.',
                'price' => 1.50,
                'stock' => 100,
                'image_url' => 'frontend/assets/images/1766545679_orange.jpeg',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Water Melon',
                'description' => 'Sweet and refreshing watermelon with juicy red flesh, perfect for staying cool and hydrated.',
                'price' => 5.00,
                'stock' => 120,
                'image_url' => 'frontend/assets/images/1766545754_water_melon.jpg',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Peach',
                'description' => 'Soft, juicy peach with a sweet aroma and delicate flavor, perfect for fresh eating or desserts.',
                'price' => 3.00,
                'stock' => 150,
                'image_url' => 'frontend/assets/images/1766545846_peach.jpg',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'Durain',
                'description' => 'Rich, creamy durian with a bold flavor and smooth texture, loved by true fruit enthusiasts.',
                'price' => 6.00,
                'stock' => 160,
                'image_url' => 'frontend/assets/images/1766546352_durain.webp',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'starberry',
                'description' => 'Fresh, sweet strawberry with a juicy texture and vibrant flavor, perfect for snacks and desserts.',
                'price' => 8.00,
                'stock' => 76,
                'image_url' => 'frontend/assets/images/1766546008_starberry.jpg',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'pineaple',
                'description' => 'Tropical, juicy pineapple with a perfect balance of sweet and tangy flavor, great for fresh eating or cooking.',
                'price' => 7.00,
                'stock' => 150,
                'image_url' => 'frontend/assets/images/1766546056_organic pineaple.png',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'dragon fruit',
                'description' => 'Mildly sweet dragon fruit with refreshing flesh and tiny crunchy seeds, perfect for a light, healthy snack.',
                'price' => 9.00,
                'stock' => 140,
                'image_url' => 'frontend/assets/images/1766546287_dragon fruit.jpg',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'name' => 'grape',
                'description' => 'Juicy, sweet grapes with a refreshing flavor, perfect for snacking or adding to desserts.',
                'price' => 8.00,
                'stock' => 50,
                'image_url' => 'frontend/assets/images/1766546370_graph.jpg',
                'status' => 'ACTIVE',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}
