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
                'image_url' => 'https://source.unsplash.com/400x300/?chicken,katsu'
            ],
            [
                'name' => 'Beef Teriyaki Don',
                'description' => 'Daging sapi lembut dengan saus teriyaki premium.',
                'price' => 35000,
                'image_url' => 'https://source.unsplash.com/400x300/?beef,teriyaki'
            ],
            [
                'name' => 'Salmon Mentai Rice',
                'description' => 'Salmon torch dengan saus mentai creamy.',
                'price' => 42000,
                'image_url' => 'https://source.unsplash.com/400x300/?salmon,mentai'
            ],
            [
                'name' => 'Chicken Curry Rice',
                'description' => 'Kari Jepang mild dengan potongan ayam.',
                'price' => 30000,
                'image_url' => 'https://source.unsplash.com/400x300/?japanese,curry'
            ],
            [
                'name' => 'Ebi Fry Bento',
                'description' => 'Udang goreng tepung renyah.',
                'price' => 33000,
                'image_url' => 'https://source.unsplash.com/400x300/?shrimp,tempura'
            ],
            [
                'name' => 'Karaage Don',
                'description' => 'Ayam goreng karaage juicy khas Jepang.',
                'price'=> 27000,
                'image_url' => 'https://source.unsplash.com/400x300/?karage,japan'
            ],
            [
                'name' => 'Gyudon Original',
                'description' => 'Gyudon klasik dengan bawang dan saus nikmat.',
                'price' => 32000,
                'image_url' => 'https://source.unsplash.com/400x300/?gyudon'
            ],
            [
                'name' => 'Tori Don',
                'description' => 'Ayam tumis saus manis gurih.',
                'price' => 26000,
                'image_url' => 'https://source.unsplash.com/400x300/?chicken,japan'
            ],
            [
                'name' => 'Tamago Roll',
                'description' => 'Telur gulung Jepang lembut.',
                'price' => 15000,
                'image_url' => 'https://source.unsplash.com/400x300/?tamago'
            ],
            [
                'name' => 'Miso Soup',
                'description' => 'Sup miso hangat dengan tofu dan rumput laut.',
                'price' => 8000,
                'image_url' => 'https://source.unsplash.com/400x300/?miso,soup'
            ],
        ];

        Menu::insert($menus);
    }
}
