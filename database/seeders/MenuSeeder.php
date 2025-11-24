<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        $menus = [
            [
                'name' => 'Chicken Katsu Bento',
                'description' => 'Ayam katsu renyah dengan saus tonkatsu.',
                'price' => 28000,
                'image_url' => 'https://source.unsplash.com/400x300/?chicken,katsu',
                'stock'=> 100,
            ],
            [
                'name' => 'Beef Teriyaki Don',
                'description' => 'Daging sapi lembut dengan saus teriyaki premium.',
                'price' => 35000,
                'image_url' => 'https://source.unsplash.com/400x300/?beef,teriyaki',
                'stock'=> 80,
            ],
            [
                'name' => 'Salmon Mentai Rice',
                'description' => 'Salmon torch dengan saus mentai creamy.',
                'price' => 42000,
                'image_url' => 'https://source.unsplash.com/400x300/?salmon,mentai',
                'stock'=> 50,
            ],
            [
                'name' => 'Chicken Curry Rice',
                'description' => 'Kari Jepang mild dengan potongan ayam.',
                'price' => 30000,
                'image_url' => 'https://source.unsplash.com/400x300/?japanese,curry',
                'stock'=> 60,
            ],
            [
                'name' => 'Ebi Fry Bento',
                'description' => 'Udang goreng tepung renyah.',
                'price' => 33000,
                'image_url' => 'https://source.unsplash.com/400x300/?shrimp,tempura',
                'stock'=> 70,
            ],
            [
                'name' => 'Karaage Don',
                'description' => 'Ayam goreng karaage juicy khas Jepang.',
                'price'=> 27000,
                'image_url' => 'https://source.unsplash.com/400x300/?karage,japan',
                'stock'=> 90,
            ],
            [
                'name' => 'Gyudon Original',
                'description' => 'Gyudon klasik dengan bawang dan saus nikmat.',
                'price' => 32000,
                'image_url' => 'https://source.unsplash.com/400x300/?gyudon',
                'stock'=> 80,
            ],
            [
                'name' => 'Tori Don',
                'description' => 'Ayam tumis saus manis gurih.',
                'price' => 26000,
                'image_url' => 'https://source.unsplash.com/400x300/?chicken,japan',
                'stock'=> 75,
            ],
            [
                'name' => 'Tamago Roll',
                'description' => 'Telur gulung Jepang lembut.',
                'price' => 15000,
                'image_url' => 'https://source.unsplash.com/400x300/?tamago',
                'stock'=> 100,
            ],
            [
                'name' => 'Miso Soup',
                'description' => 'Sup miso hangat dengan tofu dan rumput laut.',
                'price' => 8000,
                'image_url' => 'https://source.unsplash.com/400x300/?miso,soup',
                'stock'=> 50,
            ],
        ];

        Menu::insert($menus);
    }
}
