<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {  DB::table('products')->insert([
    // 🧭 Mobile Category
    [
        'name' => 'iPhone 15 Pro',
        'price' => '150000',
        'category' => 'mobile',
        'gallery' => 'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-15-pro-1.jpg',
        'description' => 'Premium build, A17 Pro chip, and an incredible Super Retina XDR display.'
    ],
    [
        'name' => 'iPhone 15 Pro Max',
        'price' => '170000',
        'category' => 'mobile',
        'gallery' => 'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-15-pro-max-1.jpg',
        'description' => 'Apple’s largest and most advanced iPhone with improved camera zoom and battery life.'
    ],
    [
        'name' => 'iPhone 16 Pro',
        'price' => '180000',
        'category' => 'mobile',
        'gallery' => 'https://fdn2.gsmarena.com/vv/pics/apple/apple-iphone-16-pro-1.jpg',
        'description' => 'Next-gen performance with A18 Bionic chip and upgraded titanium design.'
    ],
    [
        'name' => 'Samsung Galaxy S24 Ultra',
        'price' => '160000',
        'category' => 'mobile',
        'gallery' => 'https://fdn2.gsmarena.com/vv/pics/samsung/samsung-galaxy-s24-ultra-1.jpg',
        'description' => 'Ultimate Android flagship featuring S Pen, 200MP camera, and AMOLED 2X display.'
    ],
    [
        'name' => 'OnePlus 12 Pro',
        'price' => '90000',
        'category' => 'mobile',
        'gallery' => 'https://fdn2.gsmarena.com/vv/pics/oneplus/oneplus-12-1.jpg',
        'description' => 'Flagship killer with Snapdragon 8 Gen 3 and a vibrant LTPO AMOLED screen.'
    ],

    // 💻 Laptop Category
    [
        'name' => 'MacBook Pro M3',
        'price' => '210000',
        'category' => 'laptop',
        'gallery' => 'https://store.storeimages.cdn-apple.com/4668/as-images.apple.com/is/mbp14-m3-hero-202310?wid=1200&hei=630&fmt=jpeg&qlt=95&.v=1697147144478',
        'description' => 'Powerful M3 chip with Liquid Retina XDR display and all-day battery life.'
    ],
    [
        'name' => 'Dell XPS 15 OLED',
        'price' => '190000',
        'category' => 'laptop',
        'gallery' => 'https://i.dell.com/sites/imagecontent/products/PublishingImages/xps-15-9530-laptop/pdp/xps-15-9530-laptop-pdp-hero.jpg',
        'description' => 'Ultra-thin laptop with 3.5K OLED display and Intel i9 performance.'
    ],

    // ⌚ Smartwatch Category
    [
        'name' => 'Apple Watch Series 9',
        'price' => '45000',
        'category' => 'smartwatch',
        'gallery' => 'https://fdn2.gsmarena.com/vv/pics/apple/apple-watch-series9-1.jpg',
        'description' => 'Track health, workouts, and heart rate with powerful S9 chip.'
    ],

    // 🎧 Audio Category
    [
        'name' => 'Sony WH-1000XM5',
        'price' => '32000',
        'category' => 'headphones',
        'gallery' => 'https://m.media-amazon.com/images/I/51SKmu2G9JL._SL1500_.jpg',
        'description' => 'Industry-leading noise-cancelling wireless headphones with 30-hour battery.'
    ],

    // 📺 Television Category
    [
        'name' => 'LG OLED evo C3 55-inch',
        'price' => '145000',
        'category' => 'television',
        'gallery' => 'https://www.lg.com/content/dam/channel/wcms/in/images/tv/oled55c3psa_atr_eail_in_c3_oled_tv_2023_gallery_front.jpg',
        'description' => 'Cinematic 4K OLED display with AI picture enhancement and Dolby Vision.'
    ]
]
        
);  }
}
