<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new \App\Product([
        'imagePath' => 'http://www.vladhleb.ru/upload/resize_cache/iblock/f0b/700_500_240cd750bba9870f18aada2478b24840a/f0b8f68f71e55985008f6a467864d5f1.jpg',
        'title' => 'Чизкей с клюквой',
        'description' => 'Блюдо европейской и американской кухни, представляющее собой сыросодержащий десерт от творожной запеканки до пирожного суфле.',
        'price' => 25
         ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.vladhleb.ru/upload/resize_cache/iblock/f0b/700_500_240cd750bba9870f18aada2478b24840a/f0b8f68f71e55985008f6a467864d5f1.jpg',
            'title' => 'Чизкей с клюквой',
            'description' => 'Блюдо европейской и американской кухни, представляющее собой сыросодержащий десерт от творожной запеканки до пирожного суфле.',
            'price' => 25
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.vladhleb.ru/upload/resize_cache/iblock/f0b/700_500_240cd750bba9870f18aada2478b24840a/f0b8f68f71e55985008f6a467864d5f1.jpg',
            'title' => 'Чизкей с клюквой',
            'description' => 'Блюдо европейской и американской кухни, представляющее собой сыросодержащий десерт от творожной запеканки до пирожного суфле.',
            'price' => 25
        ]);
        $product->save();

        $product = new \App\Product([
            'imagePath' => 'http://www.vladhleb.ru/upload/resize_cache/iblock/f0b/700_500_240cd750bba9870f18aada2478b24840a/f0b8f68f71e55985008f6a467864d5f1.jpg',
            'title' => 'Чизкей с клюквой',
            'description' => 'Блюдо европейской и американской кухни, представляющее собой сыросодержащий десерт от творожной запеканки до пирожного суфле.',
            'price' => 25
        ]);
        $product->save();
    }
}
