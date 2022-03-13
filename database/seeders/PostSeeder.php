<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::insert([
            [
                'title' => 'BEST COLLECTION',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat, Maecenas pretium sem.',
                'featured_image' => '/img/favicon.png',
            ],
            [
                'title' => 'NEW DESIGN FOR YOUR WEBSITE',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat, Maecenas pretium sem.',
                'featured_image' => '/img/logo.png',
            ],
            [
                'title' => 'MOST UNIQUE IDEA EVER MADE',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat, Maecenas pretium sem.',
                'featured_image' => '/img/logo2.png',
            ],
            [
                'title' => 'SIMPLE TOUCH',
                'content' => 'Aliquam purus arcu, congue a gravida ac, facilisis vel erat, Maecenas pretium sem.',
                'featured_image' => '/img/payments.png',
            ]
         ]);
    }
}
