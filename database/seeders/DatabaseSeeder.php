<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(5)->create();
        
        // User::create([
        //     'name' => 'Fakerto',
        //     'email' => 'fakerto@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Bukan Fakerto',
        //     'email' => 'bukanfakerto@gmail.com',
        //     'password' => bcrypt('54321')
        // ]);

        Category::create([
            'name' => 'Action',
            'slug' => 'action'
        ]);

        Category::create([
            'name' => 'Thriller',
            'slug' => 'thriller'
        ]);

        Category::create([
            'name' => 'Drama',
            'slug' => 'drama'
        ]);

        Category::create([
            'name' => 'Comedy',
            'slug' => 'comedy'
        ]);

        Category::create([
            'name' => 'Romance',
            'slug' => 'romance'
        ]);

        Category::create([
            'name' => 'Isekai',
            'slug' => 'isekai'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Ini title',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'ini-title',
        //     'author' => 'Saya authornya',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus, tenetur?',
        //     'body' => 'Ini isinya tapi lebih banyak.'
        // ]);
        
        // Post::create([
        //     'title' => 'Tukang haji naik bubur',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'tukang-haji-naik-bubur',
        //     'author' => 'Siapa kek',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat quo consequuntur quia ab culpa? Cupiditate!',
        //     'body' => 'Ini isinya tapi lebih banyak.'
        // ]);

        // Post::create([
        //     'title' => 'Later we talk about today',
        //     'category_id' => 3,
        //     'user_id' => 2,
        //     'slug' => 'later-we-talk-about-today',
        //     'author' => 'Fadil Jaidi',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro repudiandae fugit consequuntur placeat quos veritatis ipsum ut ab expedita eligendi?',
        //     'body' => 'Ini isinya tapi lebih banyak.'
        // ]);

        // Post::create([
        //     'title' => 'Duar jeder',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'duar-jeder',
        //     'author' => 'Michael Bayu',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => 'Ini isinya tapi lebih banyak.'
        // ]);
    }
}
