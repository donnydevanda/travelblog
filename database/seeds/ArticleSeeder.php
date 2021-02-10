<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Articles')->insert([
            [
                'users_id' => 3,
                'categories_id' => 1,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/mount-1.jpg',
            ],
            [
                'users_id' => 3,
                'categories_id' => 2,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/beach-1.jpg',
            ],
            [
                'users_id' => 3,
                'categories_id' => 3,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/city-1.jpg',
            ],
            [
                'users_id' => 4,
                'categories_id' => 1,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/mount-2.jpg',
            ],
            [
                'users_id' => 4,
                'categories_id' => 2,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/beach-2.jpg',
            ],
            [
                'users_id' => 4,
                'categories_id' => 3,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/city-2.jpg',
            ],
            [
                'users_id' => 5,
                'categories_id' => 1,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/mount-3.jpg',
            ],
            [
                'users_id' => 5,
                'categories_id' => 2,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/beach-3.jpg',
            ],
            [
                'users_id' => 5,
                'categories_id' => 3,
                'title' => 'Pengalaman Naik Rinjani',
                'description' => 'lorem100',
                'image' => 'images/city-3.jpg',
            ],
        ]);
    }
}
